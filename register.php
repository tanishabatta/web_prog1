
<?php

	
	session_start();
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];
		$score = 0;
		
		  $uppercase    = preg_match('@[A-Z]@', $password1);
		  $lowercase    = preg_match('@[a-z]@', $password1);
		  $number       = preg_match('@[0-9]@', $password1);
		  $specialchars = preg_match('@[^\w]@', $password1);
		  
		  

		if(!empty($username)){
			
			if(strlen($username) <= 5) {
				echo "Username should not be less than 5 charcaters";
			}
			else {
			}
			
			 if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
				echo "Only letters and white space allowed";
			}	
			else {
			}
			
		}	
		else {
			echo "Please enter username!";
		}
		
		if(!empty($password1)){
			
			if(strlen($password1) <= 8){
				echo "<br>Passowrd cannot be less than 8 characters!";
			} else {
			}
			if(!$uppercase){
				echo "<br> Password needs to have one uppercase character";
			}else {
			}
			if(!$lowercase){
				echo "<br> Password needs to have one lowercase character";
			}else {
			}
			
			if(!$number){
				echo "<br> Password needs to have one number";
			}else {
			}
			
			if(!$specialchars){
				echo "<br> Password needs to have one special character";
			}else {
			}
		
		} else {
			echo "<br> Please enter password!";
		}
		
		
		$_SESSION["error"] = "Password fields do not match";
		
		
		
		if(!empty($password1 && $password2) && !$uppercase && !$lowercase && !$number && !$specialchars){ 
			if( $password1 != $password2){
			header('Location: error.php');
			exit();
		} else {
			$user_data = fopen("user_data.txt", "a");
			$data = $username . "," . $password1 . "," . $score;
			fwrite($user_data, $data.PHP_EOL);
			header('Location: login.php');
			exit();
		}
		}
		
		
		
		

		
		
		
	}
	
	

?>





<!DOCTYPE html>

<html>

<title>Register Page</title>
<head>
</head>

<style>
		 body{
			 background-color:Purple;
			 background-image: url(bm.jpg);
			 text-align: center;
			 color:white;
			 background-repeat: no-repeat;
			background-size: 1600px 1000px;
			margin-top: 25%;
		 }
		 table, tr, td {
			margin-left: 40%;
			background-color: #C377EF;
			font-size: 18px;
			text-align: center;

}
		button {
			background-color: #C377EF;
			margin-bottom: 5%;
			font-size: 20px;
			cursor: pointer;
			margin-top: 3%;
		}
		
		a {
			background-color: white;
			margin-left: 30%;
			margin-right: 30%;
			margin-top: 20%;
			font-size: 20px;
			margin-bottom: 10%;
		}
		 

	</style>




<body>
	<form action="register.php" method= "POST">
	
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name ="username" placeholder="Enter username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name ="password1" placeholder="Enter password"></td>
		</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="password" name ="password2" placeholder="Re-enter password"></td>
		</tr>
	</table>
		
		
		<button type="submit" name="submit">Register Me</button>
		<br>
		
		<a href="login.php">Already Registered? Login here</a>

</form>

	
</body>
</html>