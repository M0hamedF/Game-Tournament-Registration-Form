<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS File -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <!-- Title -->
    <title>Reg sheet</title>
    <!-- Bootstrap Html & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(assets/img/BG.jpg);
        }
    </style>
</head>

<body>
    <form action="process.php" method="POST">
        <div class="card" style="background-image: url(assets/img/BG1.jpg);">
            <div class="card-header">
                <h3>Registration Form</h3>
            </div>
            <div class="card-body">
                <!-- Team Name -->
                <div class="mb-3 colom">
                    <label for="name" class="col-sm-2 col-form-label">Team Name</label>
                    <div class="size"><input type="text" class="form-control" name="team-name" required></div>
                </div>
                <!-- Team Coach -->
                <div class="mb-3 colom">
                    <label for="team-coach" class="col-sm-2 col-form-label">Team Coach</label>
                    <div class="size"><input type="text" class="form-control" name="team-coach" required></div>
                </div>
                <!-- Region -->
                <div class="mb-3 colom">
                    <label for="region" class="col-sm-2 col-form-label">Region</label>
                    <div class="size"><input type="text" class="form-control" name="region" required></div>
                </div>
                <!-- Team Logo -->
                <div class="mb-3 colom">
                    <label for="region" class="col-sm-2 col-form-label">Team Logo</label>
                    <div class="size"><input type="file" class="form-control" name="team-logo" required></div>
                </div>
                <!-- Player 1 -->
                <div class="mb-3 colom">
                    <label for="player-1" class="col-sm-2 col-form-label">Player 1</label>
                    <div class="size"><input type="text" class="form-control" name="player-1" required></div>
                </div>
                <!-- Player 2 -->
                <div class="mb-3 colom">
                    <label for="player-2" class="col-sm-2 col-form-label">Player 2</label>
                    <div class="size"><input type="text" class="form-control" name="player-2" required></div>
                </div>
                <!-- Player 3 -->
                <div class="mb-3 colom">
                    <label for="player-3" class="col-sm-2 col-form-label">Player 3</label>
                    <div class="size"><input type="text" class="form-control" name="player-3" required></div>
                </div>
                <!-- Player 4 -->
                <div class="mb-3 colom">
                    <label for="player-4" class="col-sm-2 col-form-label">Player 4</label>
                    <div class="size"><input type="text" class="form-control" name="player-4" required></div>
                </div>
                <!-- Player 5 -->
                <div class="mb-3 colom">
                    <label for="player-5" class="col-sm-2 col-form-label">Player 5</label>
                    <div class="size"><input type="text" class="form-control" name="player-5" required></div>
                </div>
                <!-- Games -->
                  <div>
                    <label>Select the games you will compete in: </label>
                    <div class="box">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="league-of-legends" value="in">
                            <label class="form-check-label" for="league-of-legends">
                                League of Legends
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="call-of-duty" value="in">
                            <label class="form-check-label" for="call-of-duty">
                                Call of Duty
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="overwatch" value="in">
                            <label class="form-check-label" for="overwatch">
                                Overwatch
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dota-2" value="in">
                            <label class="form-check-label" for="Dota-2">
                                Dota 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="valorant" value="in">
                            <label class="form-check-label" for="valorant">
                                Valorant
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="heroes-of-the-storm" value="in">
                            <label class="form-check-label" for="heroes-of-the-storm">
                                Heroes of the Storm
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Comments -->
                <div class="form-floating comment">
                    <textarea class="form-control" style="height: 100px" name="comments"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                </div>
                <!-- Button -->
                <div class="button">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
