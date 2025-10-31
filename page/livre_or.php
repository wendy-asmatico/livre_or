<?php
require_once '../fonction/tout_message.php';

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $connecter = true;
} else {
    $connecter = false;
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
    <?php if ($connecter): ?>
        <p>Bonjour <a href='./profil.php'><?= htmlspecialchars($user) ?> 👋</p></a>
         <form action="../fonction/deconnexion.php" method="POST" style="display:inline;">
      <button type="submit" class="btn_deconnexion">Déconnexion</button>
    </form>
    <?php else: ?>
        <p>Bonjour Invité 👋</p>
    <?php endif; ?>
</header>
<main>
    <section class="titre">
        <h1>Messages :</h1>
    </section>

<?php if ($connecter):?>
<section class="btn_ajouter">
<a href='./formulaire_message.php'> <span>Envoyer un message</span></a>
<span class="icon_plus_message">+</span>
</section>

<section>
<?php else: ?>
    <a href='./formulaire_inscription.php' class='btn_ajouter'>Envie d’écrire un message ? Inscrivez vous ici</a>
<?php endif; ?>
</section>

<section>
    <?php afficher_messages($db); ?>
</section>

</main>
</body>
</html>
