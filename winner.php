
<?php

	

	session_start();
	include 'verify.php';
	$score = 10;

	$_SESSION["score"] = $score;
	$_SESSION["amount"] = 60000;
	





?>





<html>



<head>

	<title>Winner</title>

	<link href="winner.css" type="text/css" rel="stylesheet" />

	

	<style>

		 body{

			 background-image: url(cong.jpg);

			 text-align: center;

			 color:white;

			 background-repeat: no-repeat;

			background-size: 1600px 1000px;

			margin-top: 20%;

			

		 }

		 

		 h1 {

			 background-color: #C377EF;

			 font-size: 30px;

			 margin-right: 25%;

			 margin-left: 25%;

		 }

		 

		 button {

			 background-color: #C377EF;

	margin-bottom: 5%;

	font-size: 20px;

	

	margin-top: 5%;
	cursor: pointer;
	text-decoration: bold;
	color: white;

		 }

		 



	</style>

</head>







<body>



<h1>CONGRATULATIONS!</h1>

<br>

<h1>YOU WIN 1 MILLION DOLLARS!!!</h1>

<br>

<a href="leaderboard.php"><button value="true">LEADERBOARD</button></a>

<a href="logout.php"><button>Log Out</button></a>









   <div class="confetti-container">

      <div class="confetti">

        <i style="--speed: 10; --bg: yellow" class="square"></i>

        <i style="--speed: 18; --bg: white" class="pentagram"></i>

        <i style="--speed: 29; --bg: green" class="rectangle"></i>

        <i style="--speed: 17; --bg: blue" class="hexagram"></i>

        <i style="--speed: 33; --bg: red" class="pentagram"></i>

        <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 5; --bg: blue" class="wavy-line"></i>

        <i style="--speed: 40; --bg: white" class="square"></i>

        <i style="--speed: 17; --bg: green" class="rectangle"></i>

        <i style="--speed: 25; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 15; --bg: yellow" class="wavy-line"> </i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 25; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 23; --bg: pink" class="wavy-line"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 37; --bg: pink" class="wavy-line"></i>

        <i style="--speed: 36; --bg: white" class="hexagram"></i>

        <i style="--speed: 32; --bg: green" class="wavy-line"></i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 29; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 30; --bg: pink" class="rectangle"></i>

        <i style="--speed: 30; --bg: red" class="square"></i>

        <i style="--speed: 18; --bg: red" class="pentagram"></i>

        <i style="--speed: 19; --bg: green" class="rectangle"></i>

        <i style="--speed: 16; --bg: blue" class="hexagram"></i>

        <i style="--speed: 23; --bg: red" class="pentagram"></i>

        <i style="--speed: 34; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 39; --bg: pink" class="wavy-line"></i>

        <i style="--speed: 40; --bg: purple" class="square"></i>

        <i style="--speed: 21; --bg: green" class="rectangle"></i>

        <i style="--speed: 14; --bg: white" class="square"></i>

        <i style="--speed: 38; --bg: green" class="rectangle"></i>

        <i style="--speed: 19; --bg: red" class="dodecagram"></i>

        <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 21; --bg: white" class="hexagram"></i>

        <i style="--speed: 17; --bg: purple" class="wavy-line"></i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 23; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 38; --bg: pink" class="rectangle"></i>

        <i style="--speed: 13; --bg: red" class="pentagram"></i>

        <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 19; --bg: cyan" class="wavy-line"></i>

        <i style="--speed: 15; --bg: steelblue" class="square"></i>

        <i style="--speed: 10; --bg: yellow" class="square"></i>

        <i style="--speed: 18; --bg: white" class="pentagram"></i>

        <i style="--speed: 29; --bg: green" class="rectangle"></i>

        <i style="--speed: 17; --bg: blue" class="hexagram"></i>

        <i style="--speed: 33; --bg: red" class="pentagram"></i>

        <i style="--speed: 26; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 24; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 5; --bg: white" class="wavy-line"></i>

        <i style="--speed: 40; --bg: purple" class="square"></i>

        <i style="--speed: 17; --bg: green" class="rectangle"></i>

        <i style="--speed: 25; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 15; --bg: cyan" class="wavy-line"> </i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 45; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 37; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 26; --bg: white" class="hexagram"></i>

        <i style="--speed: 32; --bg: cyan" class="wavy-line"></i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 45; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 23; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 50; --bg: pink" class="rectangle"></i>

        <i style="--speed: 30; --bg: red" class="square"></i>

        <i style="--speed: 18; --bg: red" class="pentagram"></i>

        <i style="--speed: 19; --bg: green" class="rectangle"></i>

        <i style="--speed: 16; --bg: blue" class="hexagram"></i>

        <i style="--speed: 23; --bg: red" class="pentagram"></i>

        <i style="--speed: 33; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 39; --bg: white" class="wavy-line"></i>

        <i style="--speed: 40; --bg: orange" class="square"></i>

        <i style="--speed: 21; --bg: green" class="rectangle"></i>

        <i style="--speed: 14; --bg: white" class="square"></i>

        <i style="--speed: 38; --bg: green" class="rectangle"></i>

        <i style="--speed: 19; --bg: red" class="dodecagram"></i>

        <i style="--speed: 29; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 34; --bg: white" class="hexagram"></i>

        <i style="--speed: 17; --bg: indigo" class="wavy-line"></i>

        <i style="--speed: 32; --bg: yellow" class="pentagram"></i>

        <i style="--speed: 23; --bg: white" class="square"></i>

        <i style="--speed: 18; --bg: green" class="rectangle"></i>

        <i style="--speed: 37; --bg: red" class="dodecagram"></i>

        <i style="--speed: 48; --bg: pink" class="wavy-line"> </i>

        <i style="--speed: 38; --bg: pink" class="rectangle"></i>

        <i style="--speed: 13; --bg: red" class="pentagram"></i>

        <i style="--speed: 49; --bg: yellow" class="dodecagram"></i>

        <i style="--speed: 19; --bg: purple" class="wavy-line"></i>

        <i style="--speed: 15; --bg: cyan" class="square"></i>

      </div>

    </div>
















</body>





</html>