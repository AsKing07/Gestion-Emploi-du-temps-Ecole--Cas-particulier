document.getElementById('formAjoutAdmin').addEventListener('submit', function(event) {
  event.preventDefault();

  const nom = document.getElementById('nom').value;
  const prenom = document.getElementById('prenom').value;
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  // Vérifier le format des données
  if (!isValidName(nom)) {
      alert('Le nom est invalide. Veuillez saisir un nom valide.');
      return;
  }

  if (!isValidName(prenom)) {
      alert('Le prénom est invalide. Veuillez saisir un prénom valide.');
      return;
  }

  if (!isValidUsername(username)) {
      alert('Le nom d\'utilisateur est invalide. Veuillez saisir un nom d\'utilisateur valide.');
      return;
  }

  if (!isValidPassword(password)) {
      alert('Le mot de passe est invalide. Veuillez saisir un mot de passe valide.Le mot de passe doit contenir 8 caracteres minimum.');
      return;
  }

  // Toutes les vérifications sont réussies, envoyer les données à votre fichier PHP
  const formData = new FormData();
  formData.append('nom', nom);
  formData.append('prenom', prenom);
  formData.append('username', username);
  formData.append('password', password);

  fetch('../Data_base_request_php/add_admin.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.json()) // Si vous renvoyez une réponse JSON depuis votre fichier PHP
  .then(data => {
      // Les données ont été envoyées avec succès, vous pouvez effectuer des actions supplémentaires si nécessaire
      if (data.insertAdmin) 
        {
          alert(data.message);
        } 
      else 
        {
            alert(data.message);
        }
  })
  .catch(error => {
      console.error('Erreur lors de l\'envoi des données:', error);
  });
});

  
  function isValidName(name) {
    // Vérifier si le nom contient uniquement des lettres et des espaces
    const nameRegex = /^[a-zA-Z\s]+$/;
    return nameRegex.test(name);
  }
  
  function isValidUsername(username) {
    // Vérifier si le nom d'utilisateur contient uniquement des lettres, des chiffres et des tirets
    const usernameRegex = /^[a-zA-Z0-9-]+$/;
    return usernameRegex.test(username);
  }
  
  function isValidPassword(password) {
    // Vérifier si le mot de passe contient au moins 8 caractères
    return password.length >= 8;
  }
  