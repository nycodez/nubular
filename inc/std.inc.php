<?php
function connect()
{
	$conn = mysql_connect('localhost', 'nubular', 'cl0udus3r');
	mysql_select_db('www_nubular_com', $conn);
	return $conn;
}
$conn = connect();
if(!$conn)
{
	echo 'No database connection.';
die();
}
