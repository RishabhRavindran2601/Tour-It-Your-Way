<?php
	session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	print_r($_POST);

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Rishabh@26";
	$dbname = "rishi";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}
	$user = $user_data['user_name'];
	$place = $_POST['place'];
	$weather = $_POST['weather'];

	$query = "insert into places values ('$user','$place','$weather')";
	mysqli_query($con, $query);
?>