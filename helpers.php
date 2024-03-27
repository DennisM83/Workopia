<?php

/**
 * Get Base Path
 * 
 * @param string $path
 * @return string
 */

 function basePath($path = '') {
    return __DIR__ . '/' . $path;
 }

 /**
  * Loading views
  *
  * @param string $name
  * @return void
  */

  function loadView($name) {
    $loadPath = basePath("views/{$name}.views.php");

    if (file_exists($loadPath)) {
        require $loadPath;
    } else {
        echo "Path {$name} does not exists in partials";
    }
  }

  /**
   * Loading partials
   * 
  * @param string $name
  * @return void
  */
  function loadPartial($name) {
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Path {$name} does not exists in partials";
    }
  }