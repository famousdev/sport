<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sport Transfer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sport/teams.php">Команда</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/sport/players.php">Игроки</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sport/countries.php">Страны</a>
      </li>
    </ul>
   
  </div>
</nav>
</header>
<div class="container-fluid">
    <?php include 'db.php';?>
    <?php include 'api.php'; ?>
    <?php
    $players = getAllPlayers($db);
      ?> 
      <table class="table table-bordered">
        <tr>
          <th>Игрок</th>
          <th>Команда</th>
          <th>Страна</th>
        </tr>
          <?php 
          foreach ($players as $player) {?>
          <tr>
          <td><a href="/sport/edit.php?player_id=<?php echo $player['player_id']; ?>"><?php echo $player['player_name'];?></a></td>
          <td><?php echo $player['team_name'];?></td>
          <td><?php echo $player['country_name'];?></td>
          </tr>
          <?php } ?>
      </table>
      <form action="" method="POST" role="form">
    <legend for="">Добавить</legend>
    <div class="form-group">
      <label for="">Введите имя </label>
      <input type="text" class="form-control" id="name" name="name" placeholder="введите имя">
    </div>
    <div class="form-group">
      <select name="country" id="country">
            <?php 
              $countries = getAllCountries($db);
              foreach($countries as $key => $value) {
                echo "<option value=".$value['country_id'].">".$value['country_name']."</option>";
              }
            ?>
      </select>      
    </div>
    
    <button type="submit" class="btn btn-default">Добавить</button>
    
</form>
</div>

<footer>
</footer>


</body>
</html>
</body>
</html>