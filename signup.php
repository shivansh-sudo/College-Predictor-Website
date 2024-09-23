<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into usertable (id,username,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<?php
// Your PHP code remains unchanged
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			opacity: 0.8;
			background-image:url("image1.jpg");
			background-size: 100% 100%;

        }

        .box {
            background-color: #ffffff;
            border-radius: 8px;
			border: 2px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            text-align: center;
        }

        .box h2 {
            font-size: 20px;
            margin: 10px;
            color: #333333;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group input {
            height: 40px;
            border-radius: 5px;
            padding: 10px;
            border: solid thin #aaa;
            width: 100%;
            box-sizing: border-box;
        }

        .button {
            padding: 10px;
            width: 100%;
            color: white;
            background-color: lightblue;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #007acc;
        }

        .login-link {
            text-decoration: none;
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="box">
        <form method="post">
            <h2>Signup</h2>

            <div class="input-group">
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password">
            </div>

            <input class="button" type="submit" value="Signup">

            <p><a class="login-link" href="login.php">Already have an account? Login here</a></p>
        </form>
    </div>
</body>
</html>
