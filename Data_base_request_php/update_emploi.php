<?php
// Récupérer les données du formulaire
$classe = $_POST['classe'];
$jour = $_POST['jour'];
$plageHoraire = $_POST['plageHoraire'];
$nouveauCours = $_POST['Cours'];

// Effectuer la connexion à la base de données et exécuter la requête de modification
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');
$query = "UPDATE $classe SET `$plageHoraire` = '$nouveauCours' WHERE  jour = '$jour'";
$result = $connection->query($query);

if ($result) 
{
    $response = array('success' => true, 'message' => "Mise à jour de l'Emplois du temps effectuée !");
} 
else
{
    $response = array('success' => false, 'message' => "Echec de mise à jour de l'Emplois du temps !");
}

echo json_encode($response);
exit();
?>
