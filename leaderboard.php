
<?php
session_start();

	$users = file("user_data.txt");
	$userL = array();
	$userscore = array();
	$userName;
	$userScore;
	$leaderboardCount = 0;
	$length = 15;
	

	foreach($users as $line){
		$userL[] = explode("," , $line);

		foreach($userL as $user){
			$userscore[$user[0]] = $user[2];
		}
	} 
	arsort($userscore, SORT_NATURAL);
?>

<!DOCTYPE html>
<html>
<head>

	<title>Leaderboard</title>
	<link href="leaderboard.css" type="text/css" rel="stylesheet" />
	
		<style>

		tr:nth-child(even) {

  			background-color: #FDB4E3;

	</style>
</head>
<body>

	<h1>Leaderboard</h1>

	<table id="leader">
	<tbody>
	<tr class="head">
		<th>Rank</th>
		<th>Name</th>
		<th>Score</th>

	</tr>
	<?php
	foreach($userscore as $key => $value){
		$leaderboardCount++;
		echo"
		<tr>
			<td>$leaderboardCount</td>
			<td>$key</td>
			<td>$value</td>

		</tr>";
		if($leaderboardCount == $length) {
			break;
		}
	}
	?>
	</tbody>
	</table>

		<a href="welcome.php"><button>Try Again</button></a>
		<a href="logout.php"><button>Log Out</button>
	
</body>
</html>