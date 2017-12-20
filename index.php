<?php
require_once __DIR__ . '/.php/wiki.php';

define('IS_LOCALHOST', strpos($_SERVER['HTTP_HOST'], 'localhost') !== false);

if (!IS_LOCALHOST && empty($_SERVER['HTTPS'])) {
  $host = $_SERVER['HTTP_HOST'];
  header("Location: https://$host" . $_SERVER['REQUEST_URI'], true, 301);
  return;
}

if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
  $host = $_SERVER['HTTP_HOST'];
  header('Location: ' . (IS_LOCALHOST ? 'http' : 'https') . "://$host/Home", true, 302);
  return;
}

$sidebar   = render_markdown(file_get_contents(__DIR__ . '/_Sidebar.md'));
$footer    = render_markdown(file_get_contents(__DIR__ . '/_Footer.md'));
$matched   = preg_match('|^/([0-9A-Za-z&-]+)$|', $_SERVER['REQUEST_URI'], $matches);
$timestamp = time();

$page = null;
$title = null;
$breadcrumb = [];
if ($matched && file_exists(__DIR__ . '/' . $matches[1] . '.md')) {
  $page = $matches[1];
  $filename = $page . '.md';
  if (is_link(__DIR__ . '/' . $filename)) {
    $filename = readlink(__DIR__ . '/' . $filename);
    http_response_code(301);
    header('Location: /' . str_replace('.md', '', $filename));
    return;
  }
  else if ($page == 'Home') {
    $breadcrumb = [];
    $timestamp = time();
    $title = null;
    $content = render_markdown(file_get_contents(__DIR__ . '/' . $filename));
  }
  else {
    $breadcrumb = page_breadcrumb($page, file_get_contents(__DIR__ . '/_Sidebar.md'));
    $timestamp = filemtime(__DIR__ . '/' . $filename);
    $title = page_title($page);
    $content = render_markdown(file_get_contents(__DIR__ . '/' . $filename));
    $content = "<h1>$title</h1>\n\n" . $content;
  }
}
else if ($matched && $matches[1] == 'Index') {
  $breadcrumb = [['Home', 'Home']];
  $title = 'Index';
  $content = ["<h1>Index</h1>\n", '<ul>'];
  foreach (glob(__DIR__ . '/*.md') as $pathname) {
    $filename = basename($pathname);
    if ($filename[0] == '_' || is_link($pathname)) continue;
    $page = str_replace('.md', '', $filename);
    $content[] = '<li><a href="' . page_path($page) . '">' . page_title($page) . '</a></li>';
  }
  $content[] = '</ul>';
  $content = implode("\n", $content);
}
else {
  http_response_code(404);
  $title = '404 Not Found';
  $content = '<h1>404 Not Found</h1>';
}

header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $timestamp) . ' GMT');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $title ? "$title &mdash; " : '' ?>Conreality Wiki</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/index.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body role="document">
    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse"> FIXME
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Conreality Wiki</a>
          <span class="navbar-text navbar-version pull-left"><b><?php echo gmdate('Y-m-d', $timestamp) ?></b></span>
        </div>
        <div class="collapse navbar-collapse nav-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <form class="navbar-form navbar-right">
            <button id="edit" type="button" class="btn btn-primary">Edit</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-9 content">
          <?php if ($breadcrumb): ?>
          <ol class="breadcrumb">
            <?php foreach ($breadcrumb as $parent): ?>
            <li><?php echo $parent[1] ?
              '<a href="' . page_path($parent[1]) . '">' . page_title($parent[0]) . '</a>' :
              page_title($parent[0]) ?></li>
            <?php endforeach ?>
            <li class="active"><?php echo $title ?></li>
          </ol>
          <?php endif ?>
          <div class="section">
            <?php echo $content ?>
          </div>
        </div>
        <div class="col-md-3 sidebar">
          <div class="panel panel-default">
            <div class="panel-body">
               <?php echo $sidebar ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="pull-right">
          <a href="#">Back to top</a><br/>
        </p>
        <?php echo $footer ?>
      </div>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/index.js"></script>
  </body>
</html>
