<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 10;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 60000;


?>


<html>

<head>
	<title>Question 10</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>
<div id="ques">

<h3>You can win 
<div id="cash">$1 MILLION!!!</h3>
</div>
<h2>Question 10:</h2>
<h2 style="color: white;"> Who is known as the founde of IBM company?</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Steve Jobs</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Thomas J. Watson </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Nolan Bushnell</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Alan Turing</td>

	</tr>

</table>

<form action="winner.php" method="post">
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