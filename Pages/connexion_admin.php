<!-- Page de connexion des administrateurs -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Connexion Administrateur</title>
  <link rel="stylesheet" type="text/css" href="../css/connexion_admin.css">
</head>
<body>
  <h1>Connexion Administrateur</h1>
  <form id="admin-login-form" method="POST" action="../Data_base_request_php/verification_connexion_admin.php">
    <label for="username-input">Nom d'utilisateur :</label>
    <input type="text" id="username-input" name="username-input" required><br>
    <label for="password-input">Mot de passe :</label>
    <input type="password" id="password-input" name="password-input" required><br>
    <button type="submit" id="admin-login-btn">Se connecter</button>
  </form>
 
</body>
</html>

<?php
                if(isset($_GET['erreur']))
                {
                    $erreur=$_GET['erreur'];
                    if($erreur=='1')
                    {
                        $message = 'Identifiants incorrects. Veuillez réessayer.';
                        echo '<script>alert("' . $message . '");</script>';
                    }
                    if($erreur=='2')
                     {
                        $message = "Vous devez d'abord vous connectez";
                        echo '<script>alert("' . $message . '");</script>';
                     }
                    
                }
                ?>

