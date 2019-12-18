<?php
if (isset($_POST['login'])){
$login = $_POST['login'];
$password = $_POST['password'];
setcookie('login', $login);
setcookie('password', $password);
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Exercice 3 / 4</title>
  </head>
  <body>
    <header>
      <div class="menu">
          <?php include '../header.php'; ?>
      </div>
    </header>
    <div class="jumbotron m-auto text-center" id="cookies">
      <?php
          if(isset($_COOKIE['login'])){
              echo 'Ravi de vous revoir ' . $_COOKIE['login'];
          }
      ?>
    </div>
  </body>
</html>
