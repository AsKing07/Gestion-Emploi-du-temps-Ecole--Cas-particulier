<?php
// Configuration pour la connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$database = "gestionemplois";
// Connexion à la base de données
$connection = mysqli_connect($host, $user, $password, $database);
// Vérification de la connexion
if (!$connection) {
  die("Erreur de connexion à la base de données: " . mysqli_connect_error());
}
// Tableaux pour stocker les emplois du temps
$tables = array(
  "L1 G1" => "L1G1", 
  "L1 G2" => "L1G2",
  "GL2" => "GL2",
  "SI2" => "SI2",
  "IM2" => "IM2",
  "GL3" => "GL3",
  "SI3" => "SI3",
  "IM3" => "IM3"
);
// Affichage des tableaux pour chaque classe
foreach ($tables as $classe => $table) {
  // Requête pour récupérer les emplois du temps de la classe
  $query = "SELECT Jour, `7H-10H`, `10H-13H`, `13H-16H`, `16H-19H` FROM $table";
  $result = mysqli_query($connection, $query);
  // Vérification de la requête
  if (!$result) {
    echo "<h3> L'emploi du temps de $classe n'est pas encore disponible </h3> <br />";
  } else {
    // Récupération des données de la requête
    $emplois = array();
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $emplois[] = $row;
      }
    }
    // Affichage du tableau pour la classe
    echo "<h2>$classe</h2>";
    echo "<table class='emplois-table'>";
    echo "<tr><th></th><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th></tr>";
    $horaires = array("7H-10H", "10H-13H", "13H-16H", "16H-19H");
    foreach ($horaires as $horaire) {
      echo "<tr><th>$horaire</th>";
      foreach (array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi") as $jour) {
        $cours = "-";
        foreach ($emplois as $emploi) {
          if ($emploi["Jour"] == $jour && $emploi[$horaire] != "") {
            $cours = $emploi[$horaire];
            break;
          }
        }
        echo "<td>$cours</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
}
// Fermeture de la connexion à la base de données
mysqli_close($connection);
?>