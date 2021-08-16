<!doctype html>
<html lang="en">
  <head> 
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="img/iconmonstr-banknote-15.svg" />     
    <div>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!-- Bootstrap Html & CSS -->
    
            <!-- Optional JavaScript; choose one of the two! -->
        
            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            -->
         <!-- Bootstrap javascript --></div>

         <style>
           .text-center {
  text-align: center;
}
body{
    background-image: url(Pic/BG.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: center;
    background-attachment: fixed;
}
p,h3,h5,label{
    color: white;
}
         </style>
  </head>

  <body >
  <form action="server.php" method="post">
  <div class="card" style="margin-bottom: 30px; background-image: url(Pic/BG1.jpg);">
  <h3 style="margin-top: 20px; margin-bottom:30px;">Gaming Tournament Registration Form</h3>
  <div class="card-body">
  <div>
    <input type="text" name="teamname">
    <p>Team Name</p>
    <input type="text" name="teamcoach">
    <p>Team Coach</p>
    <input type="text" name="region">
    <p>Region</p>
    <input style="float: right; color:white" type="file" name="teamlogo"  multiple>
    <p style="margin-bottom:30px;">Team Logo</p>
  </div>


    <p>Select the games you will compete in: </p>
<div style="margin-right: 20%;float: right;" class="form-check">
  <input class="form-check-input" type="checkbox" value="starcraft" name="starcraft" >
  <label class="form-check-label" for="flexCheckDefault">
    StarCraft II
</label>
</div>
<div style="margin-left: 20px;" class="form-check">
  <input class="form-check-input" type="checkbox" value="leagueoflegends" name="leagueoflegends">
  <label  class="form-check-label" for="flexCheckDefault">
    League of Legends
  </label>
</div>
<div style="margin-right: 20%;float: right;" class="form-check">
  <input class="form-check-input" type="checkbox" value="overwatch" name="overwatch">
  <label class="form-check-label" for="flexCheckDefault">
    Overwatch
  </label>
</div>
<div style="margin-left: 20px;" class="form-check">
  <input class="form-check-input" type="checkbox" value="callofduty" name="callofduty">
  <label class="form-check-label" for="flexCheckDefault">
    Call of Duty
  </label>
</div>
<div style="margin-left: 20px;margin-bottom:30px;" class="form-check">
  <input class="form-check-input" type="checkbox" value="apexlegends" name="apexlegends">
  <label class="form-check-label" for="flexCheckDefault">
    Apex Legends
  </label>
</div>


<p style="margin-top: 20px;">Players Name</p>
<input type="text" name="player1">
<p>Player 1</p>
<input type="text" name="player2">
<p>Player 2</p>
<input type="text" name="player3">
<p>Player 3</p>
<input type="text" name="player4">
<p>Player 4</p>
<input type="text" name="player5">
<p>Player 5</p>


<div>
<p style="margin-top: 20px;">Any Comments</p>
  <textarea class="form-control" name="comments"></textarea>
  <label for="floatingTextarea"></label>
</div>

<div class="text-center">
  <button style="width:30%;font-weight: bolder;" type="submit" class="btn btn-primary btn-lg">Submit</button>
</div><!-- Button -->
  </form>
</div>
</div>

    <script src="code.js"></script>


    
  </body>
</html>