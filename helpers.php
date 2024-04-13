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

  function loadView($name, $data = []) {
    $loadPath = basePath("App/views/{$name}.views.php");

    if (file_exists($loadPath)) {
        extract($data);
        require $loadPath;
    } else {
        echo "Path {$name} does not exists in view";
    }
  }

  /**
   * Loading partials
   * 
  * @param string $name
  * @return void
  */
  function loadPartial($name) {
    $partialPath = basePath("App/views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Path {$name} does not exists in partials";
    }
  }

  /**
   * Inspect a value(s)
   * 
   * @param mixed $value
   * @return void
   */

   function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
   }

   /**
   * Inspect a value(s) and die
   * 
   * @param mixed $value
   * @return void
   */

   function inspectAndDie($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
   }

   /**
    * Format for salary
    *
    * @param string $salary
    * @return Formatted salary
    */
   function formatSalary($salary) {
    return '$' . number_format(floatval($salary));
   }