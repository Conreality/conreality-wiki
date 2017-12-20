<?php
require_once __DIR__ . '/Parsedown.php';
require_once __DIR__ . '/ParsedownExtra.php';

class Parser extends ParsedownExtra {}

function page_path($page) {
  return '/' . $page;
}

function page_title($page) {
  return str_replace('-', ' ', $page);
}

function parse_wikilink($wikilink) {
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

function expand_wikilinks($text) {
  return preg_replace_callback(
    '|(\[\[[^\]]+\]\])|',
    function ($matches) {
      list($page, $title) = parse_wikilink($matches[1]);
      return "[$title](/$page)";
    },
    $text);
}

function fix_indentation($input) {
  // Workaround for a bug in Parsedown:
  return str_replace("\n    * ", "\n     * ", $input);
}

function render_markdown($input) {
  static $parser = null;
  if (!$parser) {
    $parser = new Parser();
    $parser->setMarkupEscaped(true);
  }
  $output = $input;
  $output = fix_indentation($output);
  $output = expand_wikilinks($output);
  $output = $parser->text($output);
  return $output;
}

function page_breadcrumb($page, $sidebar) {
  $title = preg_quote(page_title($page), '!');
  $lines = explode("\n", $sidebar);
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
        list($page, $title) = parse_wikilink($matches[1]);
        $breadcrumb[] = [$title, $page];
      }
      else if (preg_match('|\* \*\*([^\*]+)\*\*|', $line, $matches)) {
        $breadcrumb[] = [$matches[1], null];
      }
    }
    if (!$level) break;
  }
  $breadcrumb[] = ['Home', 'Home'];
  return array_reverse($breadcrumb);
}
