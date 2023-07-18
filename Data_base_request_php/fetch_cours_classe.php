<?php
$classe = $_GET['classe'];

// Effectuer la connexion à la base de données et exécuter la requête pour récupérer les cours de la classe
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');
$query = "SELECT nom_cours FROM masseHoraire$classe";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) {
  $cours = [];
  while ($row = $result->fetch_assoc()) {
    $cours[] = $row['nom_cours'];
  }

  $response = array('success' => true, 'cours' => $cours);
} else {
  $response = array('success' => false);
}

echo json_encode($response);
exit();
?>
