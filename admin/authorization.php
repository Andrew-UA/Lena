<?php
echo "Hello World";
echo "<pre>";
print_r($_POST);
echo "</pre>";
// Works as of PHP 4.3.0
echo get_include_path();

// Works in all PHP versions
echo ini_get('include_path')."<br>";

set_include_path(get_include_path()
					.PATH_SEPARATOR.'application/controllers'
					.PATH_SEPARATOR.'application/models'
					.PATH_SEPARATOR.'application/views');
          echo get_include_path();

          // Works in all PHP versions
          echo ini_get('include_path');
?>
