<?php

require_once './config/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Accueil</title>
    <link rel="stylesheet" href="./assets/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;700;900&display=swap" rel="stylesheet">

</head>
<body class="body">
<main >
    <section class="container">
    <h1 class="title">Champions Livre D’Or</h1>
    <p class="subtitle">Un mot pour les héros de la soirée ?</p>
     </section>

     <section class="card">
    <div class="buttons">
        <a class="btn">S’inscrire</a>
        <a href="./page/connexion.php" class="btn">Connexion</a>
        <a class="btn">Invité</a>
    </div>
    </section>
   
</main>
</body>
</html>