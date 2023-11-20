let nomSujet = localStorage.getItem('valeurCellule2');
let sujetName = document.getElementById('sujetName');

sujetName.textContent = (nomSujet);


let prenomUser = localStorage.getItem('prenom');
let submitCom = document.getElementById('submitCom')
let boxCom = document.getElementById('boxCom')

submitCom.addEventListener("click", function () {

  // Date du message
  let dateCom = new Date();
  let jourCom = dateCom.getDay();
  let moisCom = dateCom.getMonth();
  let anneeCom= dateCom.getFullYear();
  let heuresCom = dateCom.getHours();
  let minutesCom = dateCom.getMinutes();

  let formatJourCom = jourCom.toString().padStart(2,'0');
  let formatMoisCom = moisCom.toString().padStart(2,'0');
  let formatAnneeCom = anneeCom.toString().padStart(2,'0');
  let formatHeureCom = heuresCom.toString().padStart(2,'0');
  let formatMinutesCom = minutesCom.toString().padStart(2,'0');
  
  let formatHHMMSSCom= formatJourCom + "/" + formatMoisCom + "/" + formatAnneeCom + " à " + formatHeureCom + ":" + formatMinutesCom;

// Prenom
let prenomUser = localStorage.getItem('prenom');

// Commentaire
let addComField = document.getElementById("addComField");
let commentaireUser = addComField.value;

// creer éléments
let nouveauCommentaire = document.createElement("p");
  nouveauCommentaire.innerHTML =`<span class="ita"> ${formatHHMMSSCom} - </span><span class="red">${prenomUser} : </span> ${commentaireUser}`;

  // ajout à la box
  boxCom.appendChild(nouveauCommentaire);
// reset
  addComField.value = "";

})
