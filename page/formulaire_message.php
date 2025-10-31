
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envoyer un message</title>
<link rel="stylesheet" href="../assets/style.css">
<link rel="stylesheet" href="../assets/connexion.css">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;700;900&display=swap" rel="stylesheet">


</head>
<body class="body">
  <main>
    <section class="container_titre">
      <h1 class="title_connexion">Envoyer un message</h1>
    </section>

    <section class="card">
      <form action="../fonction/message.php" method="POST">
        <label for="message">Message :</label>
        <textarea
        class="textarea"
          name="message"
          id="message"
          placeholder="Votre message..."
          required
        ></textarea>

        <button class="btn" type="submit">Envoyer</button>
      </form>
    </section>
  </main>
</body>
</html>
