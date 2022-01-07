<?php

$db_hostname = '127.0.0.1';
$db_database = 'Hocoyon';
$db_username = 'root';
$db_password = 'Xcial519';

  $connect = new mysqli($db_hostname, $db_username, $db_password, $db_database);
				  if($connect->connect_error) die($connect->connect_error);
?>