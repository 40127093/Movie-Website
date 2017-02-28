<?php


$mysqli = new mysqli("sqlzoo.net","scott","tiger","movie");
if($mysqli->connect_errno){
die("Database connection failed");
}
?>

