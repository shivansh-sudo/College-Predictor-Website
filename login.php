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

			//read from database
			$query = "select * from usertable where username = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['id'] = $user_data['id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
			background-image:url("image5.jpeg");
			background-size: 100% 100%;
        }

        .box {
            background-color: #ffffff;
            border-radius: 8px;
			border: 2px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
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
            height: 25px;
            border-radius: 5px;
            padding: 4px;
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

        .signup-link {
            text-decoration: none;
            color: #333333;
        }
    </style>
</head>
<body>
    <div class="box">
        <form method="post">
            <h2>Login</h2>

            <div class="input-group">
                <input type="text" name="username" placeholder="Username">
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password">
            </div>

            <input class="button" type="submit" value="Login">

            <p><a class="signup-link" href="signup.php">Click to Signup</a></p>
        </form>
    </div>
</body>
</html>
