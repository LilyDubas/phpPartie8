
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Exercice3 / 4</title>
  </head>
  <body>
    <header>
      <div class="menu">
          <?php include '../header.php'; ?>
      </div>
    </header>
    <div class="jumbotron m-auto text-center" id="cookies">
      <h1>Vous êtes...?</h1>
      <form action="user.php" method="post" enctype="multipart/form-data">
        <label> Votre nom d'utilisateur:
          <input type="text" name="login">
        </label>
        <label>Votre mot de passe:
          <input type="password" name="password">
        </label>
        <p><input type="submit" /></p>
      </form>
    </div>
  </body>
</html>
