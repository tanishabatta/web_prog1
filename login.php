<?php
session_start();
	
	
	if(isset($_POST['submit'])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	
		  $uppercase    = preg_match('@[A-Z]@', $password);
		  $lowercase    = preg_match('@[a-z]@', $password);
		  $number       = preg_match('@[0-9]@', $password);
		  $specialchars = preg_match('@[^\w]@', $password);
		  
		  

		if(!empty($username)){
			
			if(strlen($username) <= 5) {
				echo "Username should not be less than 5 charcaters";
			}
			
			 if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
				echo "Only letters and white space allowed";
			}	
			
		}	
		else {
			echo "Please enter username!";
		}
		
		if(!empty($password)){
			
			if(strlen($password) <= 8){
				echo "<br>Passowrd cannot be less than 8 characters!";
			}
			if(!$uppercase){
				echo "<br> Password needs to have one uppercase character";
			}
			if(!$lowercase){
				echo "<br> Password needs to have one lowercase character";
			}
			if(!$number){
				echo "<br> Password needs to have one number";
			}
			if(!$specialchars){
				echo "<br> Password needs to have one special character";
			}
		
		} else {
			echo "<br> Please enter password!";
		}

		$user_infile = "";
	$password_infile = "";

	$user_data = fopen("user_data.txt", "r");

	while(! feof($user_data)) {
		$user_array = fgetcsv($user_data);

		if ($user_array[0] == $username) {
			$user_infile = $user_array[0];
			$password_infile = $user_array[1];
			break;
		}
	}

	if ($password == $password_infile) {
		$_SESSION["loggedin"] = true;
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		header('Location: welcome.php');
		exit();
	}
	else{
		$_SESSION["error"] = "Username or Password is incorrect";
		header('Location: error.php');
		exit();
	}

		
	} //submit ends
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header('Location: welcome.php');
		exit();
	}
	else{
		

	}
	
?>


<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link href="style.css" type="text/css" rel="stylesheet" />
	
	<style>
	
	#heading {
			animation: color-change 1s infinite;
		}
	@keyframes color-change {
		  0% { color: #C377EF; }
		  25% { color: black; }
		  50% { color: blue; }
		  75% { color: #C377EF; }
		  100% { color: blue; }
	}
	
	</style>
</head>
<body>
	
	<div id ="heading">
		<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	</div>
		

		<h1>Login here to play!</h1> 

		<div>
			<form action="login.php" method="post">

				<label for="username">Username:</label>
				<input type="text" name="username" required=""><br><br>

				<label for="password">Password:</label>
				<input type="password" name="password" required=""><br><br>

				<button type="submit" name="submit">Login</button>
			</form>
		</div>
	
	
	<div id= "register">
	<h1>Don't have an account?</h1>
<br>	
	<a href="register.php"><button>Register here</button></a></h1>
	</div>

</body>
</html>