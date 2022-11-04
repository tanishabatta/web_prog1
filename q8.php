<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 7;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 40000;


?>

<html>

<head>
	<title>Question 8</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>
<h2>Current Player:

<div id="ques">

<h3>You can win 
<div id="cash">$50,000!</h3>
</div>
<h2>Question 8:</h2>
<h2 style="color: white;">Linux is an example of?</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Software</td>

		<td style="border-color: #164BF3; background-color: #000000;">B.Operating System </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Browser</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Application</td>

	</tr>

</table>

<form action="q9.php" method="post">
	<p>Pick your answer!</p>
	<select name="answer">
		<option value="false">A</option>
		<option value="true">B</option>
		<option value="false">C</option>
		<option value="false">D</option>
	</select>
	<div>
	<input type="submit" value="Final Answer" class="submit">
	</div>
	</p>
	</form>
	


</body>

</html>