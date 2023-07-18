<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$username = $_POST['username'];
$password = $_POST['password'];

// Effectuer la connexion à la base de données
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');

// Vérifier si le nom d'utilisateur existe déjà
$checkQuery = "SELECT * FROM admin WHERE username = '$username'";
$checkResult = $connection->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // Le nom d'utilisateur existe déjà, notifier l'utilisateur de choisir un autre nom d'utilisateur
    $insertAdmin = false;
    $response = array('insertAdmin' => $insertAdmin, 'message' => 'Le nom d\'utilisateur existe déjà. Veuillez choisir un autre nom d\'utilisateur.');
    echo json_encode($response);
    exit();
} else {
    // Le nom d'utilisateur n'existe pas, effectuer l'insertion
    $insertQuery = "INSERT INTO admin (nom, prenom, username, password) VALUES ('$nom', '$prenom', '$username', '$password')";
    $insertResult = $connection->query($insertQuery);

    if ($insertResult) {
        $insertAdmin = true;
        $response = array('insertAdmin' => $insertAdmin, 'message' => 'Ajout de l\'administrateur effectué !');
        echo json_encode($response);
        exit();
    } else {
        $insertAdmin = false;
        $response = array('insertAdmin' => $insertAdmin, 'message' => 'Erreur lors de l\'ajout de l\'administrateur.');
        echo json_encode($response);
        exit();
    }
}

// Fermer la connexion à la base de données
$connection->close();
?>
