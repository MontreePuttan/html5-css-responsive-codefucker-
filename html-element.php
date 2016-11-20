<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>element</title>
    <style>
    span{
      color: red;
      display: block;
    }

    pokemon{
      color: yello;
      background: red;
      display: block;
    }
    </style>
  </head>
  <body>
<?php
/*
*Element
* 1. Block-level
* 2. Inline
*/
?>

<?php
/* Block-level */
?>

<div class="test">
  <h1>Block-level</h1>
  <p>
    Lorem ipsum dolor , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</div>

<?php
/* Inline */
?>
<div class="test">
  <h1>Inline</h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur<span> sit amet, consectetur adipisicing elit</span> adipisicing elit, sed do eiusmod tempor incididunt ut labore et <pokemon>dolore magna aliqua. Ut enim ad minim veniam</pokemon>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <a href="www.google.co.th">Google</a>
  </p>
</div>

  </body>
</html>
