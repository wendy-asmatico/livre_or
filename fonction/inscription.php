<?php 

require_once '../config/db.php';
session_start();

function inscription($db) {

        $login = $_POST['pseudo'];
        $password = $_POST["motdepasse"];
        $hash = password_hash($password, PASSWORD_DEFAULT);

    try {

        $checkSql = 'SELECT id FROM users WHERE login = :login';
        $checkStmt = $db->prepare($checkSql);
        $checkStmt->bindParam(':login', $login, PDO::PARAM_STR);
        $checkStmt->execute();

        if ($checkStmt->fetch()) {
            // Le login est déjà pris
            return "<p class='message_negatif'>Ce pseudo est déjà utilisé ❌</p>";
        }
        
    $sql='INSERT INTO users(login, password) VALUES (:login, :password)';
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hash, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "<p class='message_positif'>Inscription réussie 🎉 !</p>";
            header('Location: ../page/formulaire_connexion.php');
        } else {
            return "<p class='message_negatif'>Erreur lors de l’inscription.</p>";
        }
    } catch (PDOException $e) {
        return "Une erreur est survenue : " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 

    $message = inscription($db);
    $_SESSION['message'] = $message;
    header('Location: ../page/formulaire_inscription.php');

    exit;
}

?>