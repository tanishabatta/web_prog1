<!DOCTYPE html>
<?php
	
	session_start();
	
	$score = 0;
	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 0;


?>

<html>

<head>
	<title>Question 1</title>
	
	<link rel="stylesheet" href="questions.css">

</head>





<body>

<h1> WHO WANTS TO BE A MILLIONAIRE?  </h1>
<h2>Let's start playing, <?php

	echo $_POST["user_name"];

?>
!


</h2>

<div class="ques">
<h3>You can win</h3>
<div id="cash">
 <h3>$500!</h3>
</div>


<h2>Question 1:</h2>
<h2 style="color: white;">Which key combination is used to permanently delete a file or a folder?</h2>
</div>
<table style="border: 1px solid; border-color: #164BF3; background-color: rgb(0, 0, 0);">



	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">A. shift+delete</td>

		<td style="border-color: #164BF3; background-color: #000000;">B. Alt+delete </td>

	</tr>

	<tr>

		<td style="border-color: #164BF3; background-color: #000000;">C. CTRL+delete</td>

		<td style="border-color: #164BF3; background-color: #000000;">D. Delete</td>

	</tr>

</table>

<form action="q2.php" method="post">
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