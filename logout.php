<?php
error_reporting(0);
require 'core.inc.php';

session_destroy();
header('Location: index.php');

?>