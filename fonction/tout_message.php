<?php 

require_once '../config/db.php';
session_start();


function afficher_messages($db) {
    try {
        $sql = "SELECT u.login, c.commentaire, c.ajout 
                FROM commentaires c
                INNER JOIN users u ON c.id_user = u.id
                ORDER BY c.ajout DESC
                LIMIT 20";

        $stmt = $db->prepare($sql);
        $stmt->execute();

        $commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($commentaires)) {
            echo '<p class="aucun_resultat">Aucun message trouvé.</p>';
        } else {
            foreach ($commentaires as $cle) {
                echo "
                <div class='message_card'>
                    <p class='auteur'>" . htmlspecialchars($cle['login']) . " :</p>
                    <p class='contenu'>" . htmlspecialchars($cle['commentaire']) . "</p>
                    <p class='date'>" . date('d/m/Y', strtotime($cle['ajout'])) . "</p>
                </div>
                ";
            }
        }

    } catch (PDOException $e) {
        echo "<p class='message_negatif'>Erreur SQL : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
}

?>
