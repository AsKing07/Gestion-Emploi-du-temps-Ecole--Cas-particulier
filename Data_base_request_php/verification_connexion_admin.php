

<?php
session_start();
// Informations de connexion à la base de données
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'gestionemplois';

// Connexion à la base de données
$db = mysqli_connect($hostname, $username, $password, $database);

// Vérification de la connexion
if (!$db) {
    die('Erreur de connexion à la base de données : ' . mysqli_connect_error());
}

// Récupération des données de saisie du formulaire
$username = $_POST['username-input'];
$password = $_POST['password-input'];

// Requête SQL pour vérifier les identifiants
$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db, $query);

// Vérification du résultat de la requête
if ($result && mysqli_num_rows($result) > 0) {
    // Identifiants valides
    // Redirection vers la page de gestion réservée aux administrateurs
    $_SESSION['logged_in'] = true;

    header('Location: ../Pages/page_gestion.php?nom='.$username);
    exit();
} else {
    // Identifiants invalides
    // Effectuez ici les actions nécessaires en cas d'échec de connexion
   
    header('Location: ../Pages/connexion_admin.php?erreur=1'); // utilisateur ou mot de passe incorrect
    exit();
}

// Fermeture de la connexion à la base de données
mysqli_close($db);
?>
