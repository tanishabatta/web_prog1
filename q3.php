<!DOCTYPE html>

<?php
	
	session_start();
	include 'verify.php';
	$score = 2;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 1000;


?>
	

<html>

<head>
	<title>Question 3</title>
	<link rel="stylesheet" href="questions.css">
</head>


<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$5,000!</h3>
</div>
<h2>Question 3:</h2>
<h2 style="color: white;">Which one of the following is not a computer language?</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. BASIC</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. LOTUS </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Java</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Python</td>

	</tr>

</table>

<form action="q4.php" method="post">
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