// Fonction pour récupérer le cours actuel de l'emploi du temps
function getCoursActuel() {
    const classe = document.getElementById('classe').value;
    const jour = document.getElementById('jour').value;
    const plageHoraire = document.getElementById('plageHoraire').value;
  
    const formData = new FormData();
    formData.append('classe', classe);
    formData.append('jour', jour);
    formData.append('plageHoraire', plageHoraire);
  
    fetch('../Data_base_request_php/get_cours_actuel.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) 
      {
        const coursActuel = data.coursActuel;
        document.getElementById('actuelCours').value = coursActuel;
      } else 
      {
        document.getElementById('actuelCours').value = '';
      }
    })
    .catch(error => {
      console.error('Erreur lors de la récupération du cours actuel :', error);
    });
  }
  
  // Ajoutez un événement "change" aux éléments de sélection
  document.getElementById('classe').addEventListener('change', getCoursActuel);
  document.getElementById('jour').addEventListener('change', getCoursActuel);
  document.getElementById('plageHoraire').addEventListener('change', getCoursActuel);










  //Fonction pour mettre à jour l'emploi du temps
  document.getElementById('formGestionEDT').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const classe = document.getElementById('classe').value;
    const jour = document.getElementById('jour').value;
    const plageHoraire = document.getElementById('plageHoraire').value;
    const salle = document.getElementById('salleCours').value;
    const prof = document.getElementById('profCours').value;
    const nouveauCours = document.getElementById('nouveauCours').value;
    const Cours= nouveauCours + " "+ salle + " "+ prof;
    
    const formData = new FormData();
    formData.append('classe', classe);
    formData.append('jour', jour);
    formData.append('plageHoraire', plageHoraire);
    formData.append('Cours', Cours);
    
    fetch('../Data_base_request_php/update_emploi.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success)
       {
        alert(data.message);
      } 
      else 
      {
        alert(data.message);
      }
    })
    .catch(error => {
      console.error('Erreur lors de l\'envoi des données :', error);
    });
  });
  
  