<?php 
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'db_keluarahan_margoaung';
	$koneksi = mysql_connect($host, $user, $pass) or die(mysql_error());
	$dbselect = mysql_select_db($dbname) or die(mysql_error());
 ?>