<?php
require_once '../config/db.php';
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../pages/formulaire_connexion.php');
    exit;
}

$id = $_SESSION['id'];

function ajout_commentaire($id, $db) {
    $commentaire = trim($_POST['message'] ?? '');

    if (empty($commentaire)) {
        return "<p class='message_negatif'>Le commentaire est vide.</p>";
    }

    try {
        $sql = "INSERT INTO commentaires (commentaire, id_user) VALUES (:commentaire, :id_user)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':commentaire', $commentaire, PDO::PARAM_STR);
        $stmt->bindParam(':id_user', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "<p class='message_positif'>Commentaire envoyé 🎉 ! Merci 😄</p>";
        } else {
            return "<p class='message_negatif'>Erreur lors de l'envoi du message.</p>";
        }
    } catch (PDOException $e) {
        return "<p class='message_negatif'>Une erreur est survenue : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $message = ajout_commentaire($id, $db);
    $_SESSION['message'] = $message;
    header('Location: ../page/livre_or.php');
    exit;
}
?>
