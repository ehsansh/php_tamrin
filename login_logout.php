<?php

require 'core.inc.php';

$http_referer = $_SERVER['HTTP_REFERER'];

session_destroy();

header('Location:'.$http_referer);


?>
