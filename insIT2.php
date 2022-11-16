<?php
	session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	print_r($_POST);
	print_r( $_POST["name"]);

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Rishabh@26";
	$dbname = "rishi";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}
	$user = $user_data['user_name'];
	$fno = $_POST['name'];
	$src = $_POST['star'];
	$dst = $_POST['cuisine'];
	$price = $_POST['status'];

	$query = "insert into foods values ('$user','$fno','$src','$dst','$price')";
	mysqli_query($con, $query);
	header("Location: http://localhost/travel_project/itenary.php");
?>