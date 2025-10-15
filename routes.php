<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = [
  '/' => 'views/index.php',
  '/menu' => 'views/menu-feedback.php',
  '/submit' => 'views/submit-form-feedback.php',

  '/store' => 'controllers/store.php',
  '/list' => 'controllers/list.php',
  '/feedback' => 'controllers/show.php',
  '/feedback/edit' => 'controllers/edit.php',
  '/update' => 'controllers/update.php',
  '/delete' => 'controllers/delete.php'

];

if (array_key_exists($uri, $route)) {
  require $route[$uri];    // Load the correct controller or view based on URL
} else {
  echo "404 - Page not found."; // Simple error handling for invalid URLs

}
