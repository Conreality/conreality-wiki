<?php
define('WIKI_FILE_EXT', '.rst'); // reST
define('WIKI_RST2HTML', __DIR__ . '/../.python/bin/rst2html5.py');

class Wiki {
  function __construct($path, $suffix = WIKI_FILE_EXT) {
    $this->path = $path;
    $this->suffix = $suffix;
  }

  function get_path($path) {
    return $this->path . '/' . $path;
  }

  function get_sidebar() {
    return $this->get_page('_Sidebar');
  }

  function get_footer() {
    return $this->get_page('_Footer');
  }

  function get_page($id) {
    if ($id == 'Home') return new WikiHomePage($this);
    if ($id == 'Index') return new WikiIndexPage($this);
    return new WikiContentPage($this, $id);
  }

  function get_pages() {
    $result = [];
    foreach (glob($this->get_path("*{$this->suffix}")) as $pathname) {
      $filename = basename($pathname);
      if ($filename[0] == '_' || is_link($pathname)) continue; // skip special pages and links
      $page_id = str_replace($this->suffix, '', $filename);
      $result[] = new WikiContentPage($this, $page_id);
    }
    return $result;
  }
}

class WikiPage {
  function __construct($parent, $id) {
    $this->parent = $parent;
    $this->id = $id;
    $this->title = str_replace('-', ' ', $id);
  }

  function exists() {
    return true;
  }

  function is_link() {
    return false;
  }

  function get_mtime() {
    return time();
  }

  function has_breadcrumb() {
    return !empty($this->get_breadcrumb());
  }

  function get_breadcrumb() {
    return [];
  }

  function get_html() {
    return WikiParser::render($this);
  }

  function get_body() {
    return !empty($this->body) ? $this->body : '';
  }
}

class WikiContentPage extends WikiPage {
  function __construct($parent, $id) {
    parent::__construct($parent, $id);
  }

  function exists() {
    return file_exists($this->get_pathname());
  }

  function is_link() {
    return is_link($this->get_pathname());
  }

  function get_link_target() {
    return str_replace($this->parent->suffix, '', readlink($this->get_pathname()));
  }

  function get_mtime() {
    return filemtime($this->get_pathname());
  }

  function has_breadcrumb() {
    return true;
  }

  function get_breadcrumb() {
    $breadcrumb = [];
    $title = preg_quote($this->title, '!');
    $lines = explode("\n", $this->parent->get_sidebar());
    $index = $level = null;
    foreach ($lines as $line_no => $line) {
      if (preg_match('![\[\*\|]' . $title . '[\]\*]!', $line)) {
        $index = $line_no;
        $level = strpos($line, '* ');
        break;
      }
    }
    if (!$index) return [];
    for ($i = $index - 1; $i > 0; $i--) {
      $line = $lines[$i];
      if (strpos($line, '* ') < $level) {
        $level = strpos($line, '* ');
        if (preg_match('|(\[\[[^\]]+\]\])|', $line, $matches)) {
          list($page_id, $title) = WikiParser::parse_wikilink($matches[1]);
          $page = new WikiContentPage($this->parent, $page_id);
          $page->title = $title;
          $breadcrumb[] = $page;
        }
        else if (preg_match('|\* \*\*([^\*]+)\*\*|', $line, $matches)) {
          $page = new WikiContentPage($this->parent, '');
          $page->id = null;
          $page->title = $matches[1];
          $breadcrumb[] = $page;
        }
      }
      if (!$level) break;
    }
    return array_reverse($breadcrumb);
  }

  function get_body() {
    return file_get_contents($this->get_pathname());
  }

  function get_filename() {
    return $this->id . $this->parent->suffix;
  }

  function get_pathname() {
    return $this->parent->get_path($this->get_filename());
  }
}

class WikiHomePage extends WikiContentPage {
  function __construct($parent) {
    parent::__construct($parent, 'Home');
    $this->title = null; // hide the title
  }

  function get_mtime() {
    return time();
  }

  function has_breadcrumb() {
    return false;
  }
}

class WikiIndexPage extends WikiPage {
  function __construct($parent) {
    parent::__construct($parent, 'Index');
  }

  function has_breadcrumb() {
    return true;
  }

  function get_html() {
    $result = ['<ul>'];
    foreach ($this->parent->get_pages() as $page) {
      $result[] = '<li><a href="/' . $page->id . '">' . $page->title . '</a></li>';
    }
    $result[] = '</ul>';
    return implode("\n", $result);
  }
}

class WikiErrorPage extends WikiPage {
  function __construct($parent, $status) {
    parent::__construct($parent, (string)$status);
    $this->title = '404 Not Found';
    $this->status = $status;
  }

  function exists() {
    return false;
  }
}

class WikiParser {
  static function parse_wikilink($wikilink) {
    $title = substr($wikilink, 2, -2);
    $page = $title;
    if (strpos($title, '|') !== false) {
      list($title, $page) = explode('|', $title);
    }
    $page = str_replace("\n", '-', $page);
    $page = str_replace(' ', '-', $page);
    $page = str_replace('/', '-', $page);
    return [$page, $title];
  }

  static function expand_wikilinks($text) {
    return preg_replace_callback(
      '|(\[\[[^\]]+\]\])|',
      function ($matches) {
        list($page, $title) = WikiParser::parse_wikilink($matches[1]);
        return "<a href=\"/$page\" class=\"wikilink\">$title</a>";
      },
      $text);
  }

  static function render($page) {
    $command = [];
    $command[] = escapeshellcmd(WIKI_RST2HTML);
    $command[] = escapeshellarg('--template=' . __DIR__ . '/../.rst2html/template.txt');
    $command[] = escapeshellarg($page->get_pathname());
    $command = implode(' ', $command);
    $output = shell_exec($command);
    $output = WikiParser::expand_wikilinks($output);
    return $output;
  }
}
