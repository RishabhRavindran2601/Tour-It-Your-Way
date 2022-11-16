<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$query = "insert into users (user_name,password) values ('$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="s.css">
</head>
<body>
    <div class="box">
        <form class="form" method="POST">
            <h2>SignUp</h2>
            <div class="inputBox">
                <input type="text" name="user_name" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <strong><a href="login.php" style="font-size: 15px;">Already have an account? Login</a></strong>
            </div>
              <input type="submit" class="button" name="Login"><span></span>
        </div>
    </div>
</body>
</html>