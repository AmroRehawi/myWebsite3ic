<?php

$host = "localhost";
$dbname = "websiteuserdata";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password,$dbname);
if($mysqli->connect_errno){
  die("Connect error:". $mysqli->connect_error);
}
return $mysqli;
