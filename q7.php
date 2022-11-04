<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 6;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 30000;


?>

<html>

<head>
	<title>Question 7</title>
	<link rel="stylesheet" href="questions.css">
</head>




<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$40,000!</h3>
</div>
<h2>Question 7:</h2>
<h2 style="color: white;">What is the full form of PDF?</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Printed Document Format</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Public Document Format </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Portable Document Format</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Published Document Format</td>

	</tr>

</table>

<form action="q8.php" method="post">
	<p>Pick your answer!</p>
	<select name="answer">
		<option value="false">A</option>
		<option value="false">B</option>
		<option value="true">C</option>
		<option value="false">D</option>
	</select>
	<div>
	<input type="submit" value="Final Answer" class="submit">
	</div>
	</p>
	</form>
	


</body>

</html>