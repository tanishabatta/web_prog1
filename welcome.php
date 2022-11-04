<html>

<head>
	<title> Welcome Page</title>
	<style>
		 body{
			 background-image: url(bm.jpg);
			 text-align: center;
			 color:white;
			 background-repeat: no-repeat;
			background-size: 1600px 1000px;
			margin-top: 25%;
		 }

		 input[type=submit] {
			 margin-top: 5%;
			 background-color: #C377EF;
			 cursor: pointer;
			 border-radius: 5px;
			 color: white;
			 padding: 5px 15px;
		 }
		 button {
			background-color: #C377EF;
			margin-bottom: 5%;
			font-size: 20px;
			cursor: pointer;
			color: white;
		}
		h1 {
			animation: color-change 1s infinite;
		}
		
		@keyframes color-change {
		  0% { color: #C377EF; }
		  25% { color: black; }
		  50% { color: blue; }
		  75% { color: #C377EF; }
		  100% { color: blue; }
}
		ul {
			margin-left: 30%;
			text-align: left;
			
		}			
	</style>
</head>






<body>

<h1>Hi, Welcome to 
<br>WHO WANTS TO BE A MILLIONAIRE?  </h1>

<h2>RULES:</h2>
<ul>
<li>There are total 10 questions in this game, and each question has 4 answer options.</li>
<li>For every answer you get right, you win a certain amount of money.</li>
<li>If you get one answer wrong, you lose and have to start again!</li>
<li>If you get all answers right, you win $1 MILLION!!</li>
</ul>

<form action="q1.php" method="post">
<h2>Name: </h2><input type="text" placeholder="ENTER NAME HERE" name= "user_name"> </input>
<br>
<div>
<input type = "submit" value="START GAME"> </input>
</div>
</form>


<br>

<a href="logout.php"><button>Log Out</button></a>


</body>

</html>

