<?php
	session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

	print_r($_POST);
	print_r( $_POST["title"]);

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "Rishabh@26";
	$dbname = "rishi";

	if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
	{

		die("failed to connect!");
	}
	$user = $user_data['user_name'];
	$fno = $_POST['title'];
	$src = $_POST['addr'];
	$dst = $_POST['star'];
	$price = $_POST['provider'];

	$query = "insert into hotels values ('$user','$fno','$src','$dst','$price')";
	mysqli_query($con, $query);
?>