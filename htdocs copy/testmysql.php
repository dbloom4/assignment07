<?php 
$link = mysqli_connect('localhost','account','daniella'); 
if (!$link) { 
 die('Could not connect to MySQL: ' . mysql_error()); 
 } 
 echo 'Connection OK'; mysql_close($link);
?> 