<?php
require_once '../config/db.php';
session_start();

function connexion($db) {
    $login = $_POST['pseudo'] ?? '';
    $password = $_POST['motdepasse'] ?? '';

    try {
        $sql = 'SELECT id, login, password FROM users WHERE login = :login';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && !empty($password) && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['login'];
            $_SESSION['id'] = $user['id'];
            header('Location: ../page/profil.php');
            exit;
        } else {
            header('Location: ../page/formulaire_connexion.php');
            return "<p class='message_negatif'>Identifiants incorrects.</p>";
        }
    } catch (PDOException $e) {
        return "<p class='message_negatif'>Erreur SQL : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = connexion($db);
    $_SESSION['message'] = $message;
}
?>
