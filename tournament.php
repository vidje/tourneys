<?php
require_once("inc/__functions.php");
$id = $_GET["id"];

if ($id != "new") {
  $repository = new TournamentRepository();
  $tournament = $repository->get($id);
}
else {
  $tournament = new Tournament();
}
?>
<!DOCTYPE>
<html>
  <head>
  <title>Simple tourney system</title>
  <meta charset="utf8">
  <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed:300,600" rel="stylesheet">
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/fc3e774ad0/UntitledProject/style.css">
  <link href="css/default.css" rel="stylesheet">
</head>

<body>
  <?php 
  include("inc/__header.php");
  ?>
  <div class="admin">
    <div class="overlay">
      <div class="header">
        TOURNAMENT MANAGEMENT
      </div>
    </div>
  </div>
  </div>
  <div class="wrapper">
      <div class="desc">
        <span class="title">Tournament list</span>
                <?php
        printf($tournament->tournament_id);
        ?>
        <hr>
        <?php
        include("inc/__tournament_form.php");
        ?>
      </div>
  </div>
</html>