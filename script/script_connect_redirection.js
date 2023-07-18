// Événement de clic sur le bouton "Se connecter"
const adminLoginButton = document.getElementById('admin-login-btn-redirection');
adminLoginButton.addEventListener('click', () => {
  // Implémentez ici la logique de connexion pour les membres de l'administration
  //alert('Fonctionnalité à implémenter : Connexion des membres de l\'administration');
  window.location.href = '../Pages/connexion_admin.php';
});
