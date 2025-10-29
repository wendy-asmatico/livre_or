<?php
require_once '../config/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/style.css">
   <link rel="stylesheet" href="../assets/connexion.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body class="body">
<main>

 <section class="container_titre">
    <h1 class="title_connexion">Connexion</h1>
     </section>

<section class="card">
  <form action="" method="POST">
    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>

    <label for="motdepass">Mot de passe :</label>
    <input type="password" name="motdepass" id="motdepass" placeholder="Votre mot de passe" required>

    <button class="btn" type="submit">Se Connecter</button>
  </form>
</section>


</main>
</body>
</html>