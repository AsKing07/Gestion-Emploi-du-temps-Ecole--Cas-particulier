<?php
// Détruire la session existante pour déconnecter l'utilisateur
session_start();
session_destroy();

// Rediriger l'utilisateur vers la page de connexion ou toute autre page appropriée
header("Location: ../index.php");
exit();
?>
