<!DOCTYPE html>
<html>
<head>
  <title>Gestion des emplois du temps</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <header>
    <div class="logo">
      <img src="assets/logo.png" alt="Logo de l'école">
    </div>
    <div class="formalites">
      <!-- Ajoutez ici les formalités -->
      <h3>Plateforme des emplois du temps</h3>
    </div>
    <div class="admin-login">
      <button id="admin-login-btn-redirection">Se connecter en tant qu'administrateur</button>
    </div>
  </header>

  <main>

        <?php
            // Récupération de la date du lundi de la semaine courante
            $today = new DateTime();
            $monday = clone $today;
            $monday->modify('last monday');

            // Affichage de la phrase avec la date du lundi
            echo "<h1>Emplois du temps de la semaine du " . $monday->format('d/m/Y') . " </h1>";
        ?>

   
          <div id="emplois-table">
            <!-- Les emplois du temps seront ajoutés dynamiquement ici -->
            <?php include 'Data_base_request_php/getEmplois.php'  ?>
          </div>

  </main>

  <footer>
    <p>Hi All,Made by Charbel SONON; Explore <a href="https://charbelsnn.x10.mx/">Charbel SONON</a> pour en savoir plus.</p>
  </footer>

  
  <script src="script/script_connect_redirection.js"></script>
</body>
</html>
