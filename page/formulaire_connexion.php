<?php
session_start();

$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']); 

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


  <?php if ($message): ?>
    <?= $message ?>
<?php endif; ?>


  <form action="../fonction/connexion.php" method="POST">
    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" name="motdepasse" id="motdepasse" placeholder="Votre mot de passe" required>

    <button class="btn" type="submit">Se Connecter</button>

    <section class="lien">
      <p>Pas de compte ? Inscrivez vous <a href="./formulaire_inscription.php">ici</a></p>
    </section>
  </form>
</section>


</main>
</body>
</html>