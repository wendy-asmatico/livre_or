<?php

require_once '../fonction/id_message.php';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('Location: formulaire_connexion.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Livre d’or</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/profil.css">

</head>
<body class="body">
<header>
        <p>Bonjour <?= htmlspecialchars($user) ?> </p>
        <form action="../fonction/deconnexion.php" method="POST" style="display:inline;">
        <button type="submit" class="btn_deconnexion">Déconnexion</button>
    </form>
</header>

<section class="titre">
<h1>Mes messages</h1>
</section>

<section class="btn_ajouter">
<a href='./formulaire_message.php'> <span>Envoyer un message</span></a>
<span class="icon_plus_message">+</span>
</section>

<section>
  <?php afficher_messages_utilisateur($id, $db); ?>
</section>

<section class="buttons">
    <a href="./livre_or.php" class="btn">Voir le livre d'Or</a>
</section>


<main>
</main>
</body>
</html>

