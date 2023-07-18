<?php
    session_start();

    if (isset($_SESSION['logged_in']) AND isset($_GET['nom'])){
        $isLoggedIn = $_SESSION['logged_in'];
        $nom=$_GET['nom'];
        // Utilisez la valeur de $isLoggedIn comme nécessaire
        // Par exemple, afficher un message de bienvenue si l'utilisateur est connecté
        if ($isLoggedIn) 
        {
            echo "Bienvenue $nom, utilisateur connecté !";
            
            
        }

    
        if(isset($_GET['insertAdmin']))
                {
                    $insertAdmin=$_GET['insertAdmin'];
                    if($insertAdmin==true)
                    {
                        $message = "Ajout de l'administrateur effectué!";
                        echo '<script>alert("' . $message . '");</script>';
                    }
                    if($insertAdmin==false)
                    {
                        $message = "Ajout de l'administrateur non effectué!";
                        echo '<script>alert("' . $message . '");</script>';
                    }
                    
                }



    } 


    else 
    {
        // La variable de session n'est pas définie, l'utilisateur n'est probablement pas connecté
        // Faites le traitement approprié dans ce cas
        header('Location: ../Pages/connexion_admin.php?erreur=2');
    }  
?>



<!DOCTYPE html>
<html>
<head>
    <title>Page de gestion</title>
    <link rel="stylesheet" type="text/css" href="../css/page_gestion_styles.css">
</head>


<header>
    <a href="../index.php">
        <img src="../assets/logo.png" alt="Logo de l'école">
    </a>
    <div class="formalites">
      <!-- Ajoutez ici les formalités -->
      <h3>Page de gestion dédiée aux administrateurs</h3>
    </div>
    <div class="admin-deconnexion">
                <form action="../Data_base_request_php/deconnexion.php" method="POST">
                     <button type="submit">Se déconnecter</button>
                </form>
    </div>
  </header>

<body>
    <h1>Page de gestion</h1>

            <div id="menu">
        <ul>
            <li><a href="#" onclick="afficherPage('pageGestionEDT')">Gérer les emplois du temps</a></li>
            <li><a href="#" onclick="afficherPage('pageGestionMassesHoraires')">Gérer les masses horaires</a></li>
            <li><a href="#" onclick="afficherPage('pageAjoutAdmin')">Ajouter un admin</a></li>
        </ul>
                

        </div>

        <div id="contenu">
            <div id="pageGestionEDT" class="page">
                
                <!-- Contenu de la page Gérer les emplois du temps -->
               
                
                
                <form id="formGestionEDT">
                        <h2>Gérer les emplois du temps</h2>
                    <label for="classe">Classe :</label>
                    <select name="classe" id="classe">
                    <option value="">Selectionner une classe</option>
                    <option value="L1G1">L1G1</option>
                    <option value="L1G2">L1G2</option>
                    <option value="GL2">GL2</option>
                    <option value="SI2">SI2</option>
                    <option value="IM2">IM2</option>
                    <option value="GL3">GL3</option>
                    <option value="SI3">SI3</option>
                    <option value="IM3">IM3</option>
                    <!-- Ajoutez ici d'autres options pour les classes disponibles -->
                    </select>
                    
                    <h3>Modifier l'emploi du temps :</h3>
                    
                    <label for="jour"><h4>Jour:</h4></label>
                    <select name="jour" id="jour">
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <!-- Ajoutez ici d'autres options pour les jours de la semaine -->
                    </select>
                    
                    <label for="plageHoraire"><h4>Plage horaire :</h4></label>
                    <select name="plageHoraire" id="plageHoraire">
                    <option value="7H-10H">7H-10H</option>
                    <option value="10H-13H">10H-13H</option>
                    <option value="13H-16H">13H-16H</option>
                    <option value="16H-19H">16H-19H</option>
                    <!-- Ajoutez ici d'autres options pour les plages horaires disponibles -->
                    </select>
                    
                    <label for="actuelCours">Cours actuel :</label>
                    <input type="text" name="actuelCours" id="actuelCours" readonly>

                    <label for="nouveauCours"><h4>Nouveau cours :</h4></label>
                    <input type="text" name="nouveauCours" id="nouveauCours" required>

                    <label for="salleCours"><h4>Salle :</h4></label>
                    <input type="text" name="salleCours" id="salleCours" required>

                    <label for="profCours"><h4>Professeur :</h4></label>
                    <input type="text" name="profCours" id="profCours" >
                    
                    <button type="submit">Modifier</button>
                </form>
                
            </div>

                

        











            <div id="pageGestionMassesHoraires" class="page">
                <!-- Contenu de la page Gérer les masses horaires -->

                <h1>Gestion de la masse horaire</h1>
                    <form>
                    <h3>Sélectionner la classe concernée par les modifications</h3>
                    <label for="MHclasse">Sélectionner la classe :</label>
                        <select id="MHclasse" name="MHclasse">
                            <option value="">Choisissez une classe :</option>
                            <option value="GL2">GL2</option>
                            <option value="GL3">GL3</option>
                            <!-- Ajouter d'autres options pour les autres classes -->
                        </select>
                    </form>
                    <br/><br/><br/>


                    <form id="selectionClasseForm">
                    <h3>Modifier une masse horaire</h3>
                        <label for="MHcours">Sélectionner un cours :</label>
                        <select id="MHcours" name="MHcours" disabled>
                        <!-- Les options seront ajoutées dynamiquement via JavaScript -->
                        </select>
                        <p id="masseHoraireTotaleActu"></p>
                        <p id="masseHoraireRestanteActu"></p>
                        <label for="ModifierMasseHoraire">Nouvelle Masse horaire restante :</label>
                        <input type="number" id="ModifierMasseHoraire" name="ModifierMasseHoraire" required>

                        <button type="button" onclick="modifierMasseHoraire()">Modifier la masse horaire</button>
                    </form>
                    <br/><br/><br/>

                    <form id="MHajoutCoursForm" >
                    <h3>Ajouter un nouveau cours</h3>
                        
                        <label for="nouveauLibelle">Libelle du cours :</label>
                        <input type="text" id="nouveauLibelle" name="nouveauLibelle" required>

                        <label for="MHnouveauCours">Nouveau cours :</label>
                        <input type="text" id="MHnouveauCours" name="MHnouveauCours" required>

                        <label for="nouvelleMasseHoraire">Masse horaire totale :</label>
                        <input type="number" id="nouvelleMasseHoraire" name="nouvelleMasseHoraire" required>
                            
                        <button type="button" onclick="ajouterCours()">Ajouter le cours</button>
                    </form>

                    <div id="notification"></div>





            </div>













            <div id="pageAjoutAdmin" class="page">
                <!-- Contenu de la page Ajouter un admin -->
                <form id="formAjoutAdmin" action="../Data_base_request_php/add_admin.php" method="POST">
                    <h2>Ajouter un administrateur</h2>
                    <input type="text" name="nom" placeholder="Nom" id="nom" required>
                    <input type="text" name="prenom" placeholder="Prénom" id="prenom" required>
                    <input type="text" name="username" placeholder="Nom d'utilisateur" id="username" required>
                    <input type="password" name="password" placeholder="Mot de passe" id="password" required>
                    <button type="submit">Ajouter</button>
                </form>
            </div>
        </div>





    <footer>
        <p>Hi All,Made by Charbel SONON; Explore <a href="https://charbelsnn.x10.mx/">Charbel SONON</a> pour en savoir plus.</p>
    </footer>


    <script>
                function afficherPage(pageId) {
        // Masquer toutes les pages
        const pages = document.getElementsByClassName('page');
        for (let i = 0; i < pages.length; i++) {
            pages[i].style.display = 'none';
        }

        // Afficher la page correspondante
        const page = document.getElementById(pageId);
        page.style.display = 'block';
        }

    </script>

    <script src="../script/script_add_admin_fonction.js"></script>
    <script src="../script/script_gestion_emplois.js"></script>
    <script src="../script/script_gestion_massehoraire.js"></script>
