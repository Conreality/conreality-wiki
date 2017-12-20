<?php
require_once __DIR__ . '/Parsedown.php';
require_once __DIR__ . '/ParsedownExtra.php';

class Wiki {
  function __construct($path) {
    $this->path = $path;
  }

  function get_path($path) {
    return $this->path . '/' . $path;
  }

  function get_page($id) {
    if ($id == 'Home') return new WikiHomePage($this);
    if ($id == 'Index') return new WikiIndexPage($this);
    return new WikiContentPage($this, $id);
  }

  function get_sidebar() {
    return $this->get_page('_Sidebar')->get_body();
  }

  function get_footer() {
    return $this->get_page('_Footer')->get_body();
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
    return WikiParser::render($this->get_body());
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
    return $this->id . '.md';
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
    foreach (glob($this->parent->get_path('*.md')) as $pathname) { // TODO: refactor this
      $filename = basename($pathname);
      if ($filename[0] == '_' || is_link($pathname)) continue;
      $page_id = str_replace('.md', '', $filename);
      $result[] = '<li><a href="/' . $page_id . '">' . str_replace('-', ' ', $page_id) . '</a></li>';
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

class WikiParser extends ParsedownExtra {
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
        return "[$title](/$page)";
      },
      $text);
  }

  static function fix_indentation($input) {
    // Workaround for a bug in Parsedown:
    return str_replace("\n    * ", "\n     * ", $input);
  }

  static function render($input) {
    static $parser = null;
    if (!$parser) {
      $parser = new WikiParser();
      $parser->setMarkupEscaped(true);
    }
    $output = $input;
    $output = WikiParser::fix_indentation($output);
    $output = WikiParser::expand_wikilinks($output);
    $output = $parser->text($output);
    return $output;
  }
}
