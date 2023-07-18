// Récupérer les éléments du formulaire
const selectionForm = document.getElementById('selectionClasseForm');
const classeSelect = document.getElementById('MHclasse');
const coursSelect = document.getElementById('MHcours');
const ajoutCoursForm = document.getElementById('MHajoutCoursForm');
const notificationDiv = document.getElementById('notification');
const nvelleMasseHoraire = document.getElementById('ModifierMasseHoraire');
const masseHoraireTotaleActu = document.getElementById('masseHoraireTotaleActu');
const masseHoraireRestanteActu = document.getElementById('masseHoraireRestanteActu');




// Événement lorsque la classe est sélectionnée
classeSelect.addEventListener('change', () => {
  const classe = classeSelect.value;
  if (classe === '') {
    coursSelect.innerHTML = '';
    coursSelect.disabled = true;
  } else {
    fetchCours(classe);
    coursSelect.disabled = false;
  }
});



// Fonction pour récupérer les cours de la classe sélectionnée
function fetchCours(classe) {
  // Effectuer une requête AJAX pour récupérer les cours de la classe depuis le fichier PHP
  fetch('../Data_base_request_php/fetch_cours_classe.php?classe=' + classe)
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        const coursOptions = data.cours.map(cours => `<option value="${cours}">${cours}</option>`);
        coursSelect.innerHTML = coursOptions.join('');
      } else {
        coursSelect.innerHTML = '';
      }
    })
    .catch(error => {
      console.error('Erreur lors de la récupération des cours:', error);
    });
}



// Fonction pour récupérer la masse horaire du cours sélectionné
function fetchMasseHoraire() {
    const classeS = classeSelect.value;
    const coursS = coursSelect.value;
    // Effectuer une requête AJAX pour récupérer la masse horaire depuis le fichier PHP
    fetch('../Data_base_request_php/fetch_masse_horaire.php',{
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: `classeS=${classeS}&coursS=${coursS}`
})
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          masseHoraireTotaleActu.innerHTML = 'Masse horaire totale : ' + data.masseHoraireTotale + ' heures';
          masseHoraireRestanteActu.innerHTML = 'Masse horaire restante : ' + data.masseHoraireRestante + ' heures';
        } else {
          masseHoraireTotaleActu.innerHTML = '';
          masseHoraireRestanteActu.innerHTML = '';
        }
      })
      .catch(error => {
        console.error('Erreur lors de la récupération de la masse horaire:', error);
      });
  }







// Fonction pour modifier la masse horaire du cours sélectionné
function modifierMasseHoraire() 
{
    const classe = classeSelect.value;
    const cours = coursSelect.value;
    const nvelleMasseHoraire = document.getElementById('ModifierMasseHoraire').value;
  
    // Effectuer une requête AJAX pour modifier la masse horaire depuis le fichier PHP
    fetch('../Data_base_request_php/modifier_masse_horaire.php', 
    {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `classe=${classe}&cours=${cours}&nvelleMasseHoraire=${nvelleMasseHoraire}`
    })
      .then(response => response.json())
      .then(data => {
        alert(data.message)
      })
      .catch(error => {
        console.error('Erreur lors de la modification de la masse horaire :', error);
      });
  }
  








// Fonction pour ajouter un nouveau cours
function ajouterCours() {
  const classe = classeSelect.value;
  const MHnouveauCours = document.getElementById('MHnouveauCours').value;
  const nouvelleMasseHoraire = document.getElementById('nouvelleMasseHoraire').value;
  const nouveauLibelle = document.getElementById('nouveauLibelle').value;

  // Effectuer une requête AJAX pour ajouter un nouveau cours depuis le fichier PHP
  fetch('../Data_base_request_php/ajouter_cours_massehoraire.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: `classe=${classe}&MHnouveauCours=${MHnouveauCours}&nouvelleMasseHoraire=${nouvelleMasseHoraire}&nouveauLibelle=${nouveauLibelle}`
  })
    .then(response => response.json())
    .then(data => {
        if (data.success)
        {
         alert(data.message);
         fetchCours(classe);
       } 
       else 
       {
         alert(data.message);
       }
    })
    .catch(error => {
      console.error('Erreur lors de l\'ajout du nouveau cours:', error);
    });
}
