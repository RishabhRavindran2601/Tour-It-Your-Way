<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Rishabh@26";
$dbname = "rishi";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>