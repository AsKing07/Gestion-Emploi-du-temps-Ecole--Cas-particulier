<?php

// Connexion à la base de données
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'GestionEmplois';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connexion à la base de données échouée : " . $connection->connect_error);
}

// Récupération de la masse horaire totale et restante du cours depuis la base de données
$classe = $_POST['classeS'];
$cours = $_POST['coursS'];

$query = "SELECT masse_horaire_totale, masse_horaire_restante FROM masseHoraire$classe WHERE nom_cours = '$cours'";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $masseHoraireTotale = $row['masse_horaire_totale'];
    $masseHoraireRestante = $row['masse_horaire_restante'];

    $response = array('success' => true, 'masseHoraireTotale' => $masseHoraireTotale, 'masseHoraireRestante' => $masseHoraireRestante);
} else {
    $response = array('success' => false);
}

echo json_encode($response);
exit();
?>
