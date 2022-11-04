<?php

	
	$answer = $_POST['answer'];
	$ver = strcmp($answer, "true");
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	
	$score = $_SESSION["score"];
	$amount = $_SESSION["amount"];
	
	if($ver !=0) {
		$lines = file('user_data.txt');
		$result = '';
		
		foreach($lines as $line) {
			$data = explode(',', $line);

			if($data[0] == $username) {
				$result.= $username .",". $password . "," . $score . "," . $amount . "\n";
			} else {
				$result .= $line;
			}
		}
		
		file_put_contents('user_data.txt', $result);
		
		header("Location: loser.php");
		exit;
		}
		
	?>