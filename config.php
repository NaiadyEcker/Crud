<?php
/*
// mysql_connect("host-BD", "usuario", "senha")
$conn = mysql_connect("localhost","root","root") 
			or die("Sem conexão");

// mysql_select_db("database-name", "Link de conexão identificada")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'default';
$databasePassword = 'default';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>
