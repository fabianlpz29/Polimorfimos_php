<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .box{
            display: inline-block;
            text-align: center;
            margin-left: 120px;
            margin-bottom: 90px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light" style="justify-content: left;">
        <a href="#" class="navbar-brand"></a>
        <img src="./img/753945_games_game_gaming_play_video_icon.png" width="30" height="30" class="d-inline-block align-top" alt="">PageKids
    </nav>

    <form action="index.php" method="post">
    <div class="jumbotron">

        <div class="box">
            <div class="card" style="width: 16rem; height: 14rem">
            <img class="card-img-top" src="./img/gato.jpg" alt="Card img cap" style="width: 15rem; height: 13rem">
            <div class="card-body">
                <h5 class="card-title">Gato</h5>
                <input type="submit" class="btn btn-primary" name="gato" value="Reproducir">
            </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem; height: 14rem">
            <img class="card-img-top" src="./img/perro.jpg" alt="Card img cap" style="width: 15rem; height: 13rem">
            <div class="card-body">
                <h5 class="card-title">Perro</h5>
                <input type="submit" class="btn btn-primary" name="perro" value="Reproducir">
            </div>
            </div>
        </div>

        <div class="box">
            <div class="card" style="width: 16rem; height: 14rem">
            <img class="card-img-top" src="./img/vaca.jpg" alt="Card img cap" style="width: 15rem; height: 13rem">
            <div class="card-body">
                <h5 class="card-title">Vaca</h5>
                <input type="submit" class="btn btn-primary" name="vaca" value="Reproducir">
            </div>
            </div>
        </div>

        
        <div class="box">
            <div class="card" style="width: 16rem; height: 14rem">
            <img class="card-img-top" src="./img/mapache.jpg" alt="Card img cap" style="width: 15rem; height: 13rem">
            <div class="card-body">
                <h5 class="card-title">Mapache</h5>
                <input type="submit" class="btn btn-primary" name="mapache" value="Reproducir">
            </div>
            </div>
        </div>
    </div>      
    </form>

</body>
</html>
<?php
include_once "Animal.php"
?>