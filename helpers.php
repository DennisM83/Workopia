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
    require basePath("views/{$name}.views.php");
  }

  /**
   * Loading partials
   * 
  * @param string $name
  * @return void
  */
  function loadPartial($name) {
    require "views/partials/{$name}.php";
  }