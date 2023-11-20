let prenomBjr = localStorage.getItem('prenom');
let bonjour1 = document.getElementById('bonjour1');

bonjour1.textContent = ('Bienvenue ' + prenomBjr );
bonjour1.style.fontStyle = 'lighter';
bonjour1.style.color = "grey";

let dateJour = new Date ();
let bonjour2 = document.getElementById('bonjour2');

bonjour2.textContent = ('Nous sommes le ' + dateJour.toLocaleDateString("fr"));
bonjour2.style.fontStyle = 'lighter';
bonjour2.style.color = "grey";

let dateCo = new Date();
let heures = dateCo.getHours();
let minutes = dateCo.getMinutes();
let secondes = dateCo.getSeconds();

let formatHeure = heures.toString().padStart(2,'0');
let formatMinutes = minutes.toString().padStart(2,'0');
let formatSecondes = secondes.toString().padStart(2,'0');

let formatHHMMSS= formatHeure + ":" + formatMinutes + ":" + formatSecondes;

let bonjour3 = document.getElementById('bonjour3');

bonjour3.textContent = ('Vous vous êtes connectés à : ' + formatHHMMSS);
bonjour3.style.fontStyle = 'lighter';
bonjour3.style.color = "grey";

// TABLEAU

document.addEventListener("DOMContentLoaded", function () {
  let fullTablo = document.getElementById("fullTablo");
  let submitButton = document.getElementById("submit");
  let fieldAdd = document.getElementById("fieldAdd");

  let rowCount = 1; // Initial row count

  submitButton.addEventListener("click", function () {
    let today = new Date().toLocaleDateString(); // Obtenir la date du jour

    let newRow = fullTablo.insertRow(-1); // Insérer une nouvelle ligne à la fin du tableau

    // Colonne 1 : Chiffre qui augmente de 1
    let cell1 = newRow.insertCell(0);
    cell1.textContent = rowCount;
    rowCount++;
    cell1.innerHTML = `<a href="../Html/sujetJoueurs.html" class="linkTab">${rowCount}</a>`;

    // Colonne 2 : Valeur saisie dans l'input
    let cell2 = newRow.insertCell(1);
    let nomSujet = fieldAdd.value;
    cell2.textContent = nomSujet;
    // Colonne 3 : Date du jour
    let cell3 = newRow.insertCell(2);
    cell3.textContent = today;

    // Colonne 4 : Prénom de l'utilisateur 
    let cell4 = newRow.insertCell(3);
    cell4.textContent = prenomBjr;

 // LOCAL STORAGE
    // récup de l'id
    localStorage.setItem("valeurCellule2", nomSujet);
  
    // Réinitialiser la valeur de l'input
    fieldAdd.value = "";
  });
});



