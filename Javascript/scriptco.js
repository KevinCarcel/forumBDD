let formulaireConnexion = document.getElementById("formulaireConnexion");
formulaireConnexion.addEventListener('submit', function (e) {

  let mailCo = document.getElementById("mailCo"); 
  let adresseMail = localStorage.getItem('mail');
  console.log(adresseMail);

  if(mailCo.value == ""){
let erreurCo1 = document.getElementById('erreurCo1');
erreurCo1.innerHTML = 'veuillez remplir le champ vide';
erreurCo1.style.color = 'red';
erreurCo1.style.fontStyle = 'italic';
e.preventDefault();
  }
// verif mail
  else if (mailCo.value !== adresseMail){
    let erreurCo1 = document.getElementById('erreurCo1');
    erreurCo1.innerHTML = 'identifiant non reconnu';
    erreurCo1.style.color = 'red';
    erreurCo1.style.fontStyle = 'italic';
    e.preventDefault();
  }
  else {
    let erreurCo1 = document.getElementById("erreurCo1");
    erreurCo1.innerHTML = " champ valide";
    erreurCo1.style.color = 'green';
    erreurCo1.style.fontStyle = "italic";
  };

  let mdpCo = document.getElementById('mdpsCo');
  let motDePasse = localStorage.getItem('mdps');
  console.log(motDePasse);

  // Verif mdp
 if (mdpCo.value !== motDePasse){
  let erreurCo2 = document.getElementById('erreurCo2');
  erreurCo2.innerHTML = 'Mot de passe incorrecte';
  erreurCo2.style.color = 'red';
  erreurCo2.style.fontStyle = 'italic';
  e.preventDefault();
}
else {
  let erreurCo2 = document.getElementById('erreurCo2');
  erreurCo2.innerHTML = 'champ valide';
  erreurCo2.style.color = 'green';
  erreurCo2.style.fontStyle = 'italic';
}
});