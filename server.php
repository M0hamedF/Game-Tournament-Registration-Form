<?php
     $teamname=$_POST["teamname"];
     $teamcoach=$_POST["teamcoach"];
     $region=$_POST["region"];
     $teamlogo=$_POST["teamlogo"];
     $starcraft=$_POST["starcraft"];
     $leagueoflegends=$_POST["leagueoflegends"];
     $overwatch=$_POST["overwatch"];
     $callofduty=$_POST["callofduty"];
     $apexlegends=$_POST["apexlegends"];
     $player1=$_POST["player1"];
     $player2=$_POST["player2"];
     $player3=$_POST["player3"];
     $player4=$_POST["player4"];
     $player5=$_POST["player5"];
     $comments=$_POST["comments"];

 //Connection information
$server="localhost";
$user="root";
$pass="";
$db="gaming tournament registration form";

//Connect to Server
$conn=new mysqli($server,$user,$pass,$db);

//Query
$txt="INSERT INTO teams (`Team Name`, `Team Coach`, `Region`, `Team Logo`, `Games`, `Player 1`, `Player 2`, `Player 3`, `Player 4`, `Player 5`, `Comments`) VALUES ('$teamname','$teamcoach','$region','$teamlogo','$starcraft / $leagueoflegends / $overwatch $callofduty / $apexlegends','$player1','$player2','$player3','$player4','$player5','$comments')";

if($conn->query($txt))
{
    echo "Record Saved!!!";
}
else
{
    echo "Error Check You SQL !!!!";
}
?>