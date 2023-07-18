<?php
$classe = $_POST['classe'];
$cours = $_POST['cours'];
$nvelleMasseHoraire = $_POST['nvelleMasseHoraire'];


if(empty($classe) || empty($cours) || empty($nvelleMasseHoraire))
{
    $response = array('success' => false, 'message' => 'Une information manquante. Veuillez vous assurer de renseigner la classe, le cours et la masse horaire correspondante.');
    echo json_encode($response);
    exit();
}


// Effectuer la mise à jour de la masse horaire du cours dans la base de données
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');

$query = "UPDATE masseHoraire$classe SET masse_horaire_restante = '$nvelleMasseHoraire' WHERE nom_cours = '$cours'";
$result = $connection->query($query);

if ($result) {
    $response = array('success' => true, 'message' => 'Mise à jour de la masse horaire restante effectuée.');
} else {
    $response = array('succes' => false, 'message' => 'Erreur lors de la mise à jour de la masse horaire restante.');
}

echo json_encode($response);
exit();
?>
