<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 4;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 10000;


?>

<html>

<head>
	<title>Question 5</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$20,000!</h3>
</div>
<h2>Question 5:</h2>
<h2 style="color: white;">Which company first developed the Java programming language?</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Microsoft</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Google </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. Sun Microsystems</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. IBM</td>

	</tr>

</table>

<form action="q6.php" method="post">
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