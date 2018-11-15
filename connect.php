<?php 
	$database = array();
	$database['host'] = 'localhost';
	$database['port'] = '3306';
	$database['name'] = 'calvin_space';
	$database['username'] = 'root';
	$database['password'] = '';

	$conn = mysqli_connect($database['host'], $database['username'], $database['password']);
?>