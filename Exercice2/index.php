<?php
//On démarre une nouvelle session
session_start();

//On définit des variables de session
$_SESSION['firstname'] = 'Jane';
$_SESSION['lastname'] = 'Doe';
$_SESSION['age'] = 27;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Exercice2</title>
  </head>
  <body>
    <header>
      <div class="menu">
          <?php include '../header.php'; ?>
      </div>
    </header>
    <div class="jumbotron m-auto text-center" id="cookies">
      <a href="user.php">Open session</a>
    </div>
  </body>
</html>
