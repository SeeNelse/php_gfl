<?php

// define('DIR_PATH', '/home/user8/public_html/php/task1/files/');

define('DIR_PATH', getcwd() . "/files/");

define('FILES_PATH', $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "files/");

// define('DIR_PERM', str_split(substr(sprintf('%o', fileperms(DIR_PATH)), -4)));

?>
