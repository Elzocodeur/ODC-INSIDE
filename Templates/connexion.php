
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="../Public/css/connexion.css">
</head>

<body>
  <div class="tout">
    <div class="container">
      <img class="logo" src="image.png" alt="">
      <div class="login-form">
        <div class="first">Email et Mot de Passe Requis</div>
        <label for="email">Adresse Email <span>*</span></label>
        <input type="email" id="email" placeholder="Entrez votre adresse email*" required>
        <label for="password">Mot de Passe <span>*</span></label>
        <input type="password" id="password" placeholder="Entrez votre mot de passe*" required>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Se souvenir de moi
        </label>
        <a href="#">Mot de passe Oublié?</a>
      </div>
      <form action="../Public/index.php" method="get">
        <input type="hidden" name="page" id="page" value="listeApprenant.html">
        <button class="btn" type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>