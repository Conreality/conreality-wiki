<?php
require_once __DIR__ . '/.php/wiki.php';

define('IS_LOCALHOST', strpos($_SERVER['HTTP_HOST'], 'localhost') === 0);

// Enforce HTTPS in production:
if (!IS_LOCALHOST && empty($_SERVER['HTTPS'])) {
  $host = $_SERVER['HTTP_HOST'];
  header("Location: https://$host" . $_SERVER['REQUEST_URI'], true, 301);
  return;
}

// Redirect the front page to /Home:
if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') {
  $host = $_SERVER['HTTP_HOST'];
  header('Location: ' . (IS_LOCALHOST ? 'http' : 'https') . "://$host/Home", true, 302);
  return;
}

// Parse the request path for the page ID:
$matched = preg_match('|^/([0-9A-Za-z&-]+)$|', $_SERVER['REQUEST_URI'], $matches);

$wiki = new Wiki(__DIR__);
$page = $matched ? $wiki->get_page($matches[1]) : null;

if (!$page || !$page->exists()) {
  $page = new WikiErrorPage($wiki, 404);
  http_response_code($page->status);
}
else if ($page->is_link()) {
  http_response_code(301); // 301 Moved Permanently
  header('Location: /' . $page->get_link_target());
  return; // abort response processing
}

header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $page->get_mtime()) . ' GMT');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php echo $page->title ? "{$page->title} &mdash; " : '' ?>Conreality Wiki</title>
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
          <span class="navbar-text navbar-version pull-left"><b><?php echo gmdate('Y-m-d', $page->get_mtime()) ?></b></span>
        </div>
        <div class="collapse navbar-collapse nav-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <form class="navbar-form navbar-right">
            <?php if ($page->id != 'Index'): ?>
            <button id="edit" type="button" class="btn btn-primary">Edit</button>
            <?php endif ?>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-9 content">
          <?php if ($page->has_breadcrumb()): ?>
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <?php foreach ($page->get_breadcrumb() as $parent_page): ?>
            <?php if ($parent_page->id): ?>
            <li><a href="<?php echo $parent_page->id ?>"><?php echo $parent_page->title ?></a></li>
            <?php else: ?>
            <li><?php echo $parent_page->title ?></li>
            <?php endif ?>
            <?php endforeach ?>
            <li class="active"><?php echo $page->title ?></li>
          </ol>
          <?php endif ?>
          <div class="section">
          <?php if ($page->title): ?>
            <h1><?php echo $page->title ?></h1>
          <?php endif ?>
            <?php echo isset($page->html) ? $page->html : $page->get_html() ?>
          </div>
        </div>
        <div class="col-md-3 sidebar">
          <div class="panel panel-default">
            <div class="panel-body">
               <?php echo WikiParser::render($wiki->get_sidebar()) ?>
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
        <?php echo WikiParser::render($wiki->get_footer()) ?>
      </div>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="/index.js"></script>
  </body>
</html>
