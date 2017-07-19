<?php
error_reporting(0);

require 'connect.inc.php';
@require 'core.inc.php';

if (loggedin()) {
  echo "You are logged in, ";
  echo getuserfield('first_name');
  echo " ";
 echo getuserfield('last_name');
 echo "<br> <a href='profile.php'>YOURPROFILE</a>";


  echo " <a href='logout.php'>LOG OUT </a> <br>";
}

else{
include 'loginform.inc.php';
}

?>