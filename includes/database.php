<?php

$dbHost = 'localhost';
$dbName = 'cms';
$dbUser = 'cmsadmin';
$dbPass = 'sesame';

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if(mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

?>
