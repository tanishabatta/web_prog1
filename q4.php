<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 3;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 5000;


?>

<html>

<head>
	<title>Question 4</title>
	<link rel="stylesheet" href="questions.css">
</head>


<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$10,000!</h3>
</div>
<h2>Question 4:</h2>
<h2 style="color: white;">Which web browser is developed by Google?</h2>
</div>

<table>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. IE</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Firefox </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Safari</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Chrome</td>

	</tr>

</table>
<form action="q5.php" method="post">
	<p>Pick your answer!</p>
	<select name="answer">
		<option value="false">A</option>
		<option value="false">B</option>
		<option value="false">C</option>
		<option value="true">D</option>
	</select>
	<div>
	<input type="submit" value="Final Answer" class="submit">
	</div>
	</p>
	</form>
	


</body>

</html>