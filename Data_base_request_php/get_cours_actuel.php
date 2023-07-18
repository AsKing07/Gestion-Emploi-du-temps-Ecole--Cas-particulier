<?php
// Récupérer les données du formulaire
$classe = $_POST['classe'];
$jour = $_POST['jour'];
$plageHoraire = $_POST['plageHoraire'];

// Effectuer la connexion à la base de données et exécuter la requête de récupération du cours actuel
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');
$query = "SELECT `$plageHoraire` FROM $classe WHERE  jour = '$jour'";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) 
{
    $row = $result->fetch_assoc();
    $coursActuel = $row[$plageHoraire];
    if ($coursActuel != 'Néant')
    {
        $response = array('success' => true, 'coursActuel' => $coursActuel);
    }
    else
    {
        $coursActuel="Aucun cours";
        $response = array('success' => true, 'coursActuel' => $coursActuel);
    }
    
}
 else 
{
    $response = array('success' => false);
}

echo json_encode($response);
exit();
?>
