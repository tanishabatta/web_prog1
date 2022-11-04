<!DOCTYPE html>
<?php
	
	session_start();
	include 'verify.php';
	$score = 8;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 50000;


?>


<html>

<head>
	<title>Question 9</title>
	<link rel="stylesheet" href="questions.css">
</head>



<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>

<div id="ques">

<h3>You can win 
<div id="cash">$60,000!</h3>
</div>
<h2>Question 9:</h2>
<h2 style="color: white;">The main page of a Web site is known as...</h2>
</div>

<table>



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. Home Page</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Book Mark page </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. 	Content page</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Navigator page</td>

	</tr>

</table>

<form action="q10.php" method="post">
	<p>Pick your answer!</p>
	<select name="answer">
		<option value="true">A</option>
		<option value="false">B</option>
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