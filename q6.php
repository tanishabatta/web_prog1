<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 5;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 20000;


?>

<html>

<head>
	<title>Question 6</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$30,000!</h3>
</div>
<h2>Question 6:</h2>
<h2 style="color: white;">Which one of the following is used to make powerpoints?</h2>
</div>

<table>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. MS Outlook</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. MS Word </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. MS Excel</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. MS Powerpoint</td>

	</tr>

</table>

<form action="q7.php" method="post">
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