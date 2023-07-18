<?php
$classe = $_POST['classe'];
$MHnouveauCours = $_POST['MHnouveauCours'];
$nouvelleMasseHoraire = $_POST['nouvelleMasseHoraire'];
$nouveauLibelle = $_POST['nouveauLibelle'];

// Effectuer la vérification de l'unicité du libellé du cours dans la base de données
$connection = new mysqli('localhost', 'root', '', 'GestionEmplois');

if(empty($classe) || empty($MHnouveauCours) || empty($nouveauLibelle) || empty($nouvelleMasseHoraire))
{
    $response = array('success' => false, 'message' => 'Une information manquante. Veuillez vous assurer de renseigner la classe, le libellé du nouveau cours, son nom et la masse horaire correspondante.');
    echo json_encode($response);
    exit();
}

// Vérifier si le cours existe déjà
$query = "SELECT COUNT(*) AS count FROM masseHoraire$classe WHERE libelle_cours = '$nouveauLibelle'  ";
$result = $connection->query($query);
$row = $result->fetch_assoc();
$count = $row['count'];

if ($count > 0) {
    $response = array('success' => false, 'message' => 'Ce cours ou ce libellé existe déjà.');
    echo json_encode($response);
    exit();
}

// Ajouter le cours dans la table
$query = "INSERT INTO masseHoraire$classe (libelle_cours, nom_cours, masse_horaire_totale, masse_horaire_restante) VALUES ('$nouveauLibelle', '$MHnouveauCours', '$nouvelleMasseHoraire', '$nouvelleMasseHoraire')";
$result = $connection->query($query);

if ($result) {
    $response = array('success' => true, 'message' => 'Nouveau cours ajouté avec succès.');
} else {
    $response = array('success' => false, 'message' => 'Erreur lors de l\'ajout du nouveau cours.Veuillez vous assurer de remplir toutes les sections du formulaire. Si le probleme perssiste veuillez contacter votre administrateur.');
}

echo json_encode($response);
exit();
?>
