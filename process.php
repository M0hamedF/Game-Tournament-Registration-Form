<?php
//Connection information
$server = "localhost";
$user = "root";
$pass = "";
$db = "gaming tournament registration form";
//Connect to Server
$conn = new mysqli($server, $user, $pass, $db);
//Inputs
$teamname = $_POST["team-name"];
$teamcoach = $_POST["team-coach"];
$region = $_POST["region"];
$teamlogo = $_POST["team-logo"];
$player1 = $_POST["player-1"];
$player2 = $_POST["player-2"];
$player3 = $_POST["player-3"];
$player4 = $_POST["player-4"];
$player5 = $_POST["player-5"];
$leagueoflegends = $_POST["league-of-legends"];
$callofduty = $_POST["call-of-duty"];
$overwatch = $_POST["overwatch"];
$dota2 = $_POST["dota-2"];
$valorant = $_POST["valorant"];
$herosofthestorm = $_POST["heroes-of-the-storm"];
$comments = $_POST["comments"];
//Query
$txt = "INSERT INTO `teams`(`Team Name`, `Team Coach`, `Region`, `Team Logo`, `Player 1`, `Player 2`, `Player 3`, `Player 4`, `Player 5`, `League of Legends`, `Call of Duty`, `Overwatch`, `Dota 2`, `Valorant`, `Heroes of the Storm`, `Comments`) VALUES ('$teamname','$teamcoach','$region','$teamlogo','$player1','$player2','$player3','$player4','$player5','$leagueoflegends','$callofduty','$overwatch','$dota2','$valorant','$herosofthestorm','$comments')";
$conn->query($txt) or die($conn->error);
header("location: form.php");
