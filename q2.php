<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 1;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 500;


?>

<html>

<head>
	<title>Question 2</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$1,000!</h3>
</div>
<h2>Question 2:</h2>
<h2 style="color: white;">Which is an input device?</h2>
</div>



<table>

	

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Monitor</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Printer </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Mouse</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. None of the above</td>

	</tr>

</table>

<form action="q3.php" method="post">
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