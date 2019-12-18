<?php
    //On démarre une nouvelle session
    session_start();
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
      <p><?php
        echo 'Bonjour ' .$_SESSION['firstname']. ' ' . $_SESSION['lastname'] . ',
        tu as ' .$_SESSION['age']. ' ans.';
        ?></p>
    </div>
  </body>
</html>
