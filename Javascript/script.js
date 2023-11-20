// Formulaire Enregistrer
let formulaireEnregistrer = document.getElementById("formulaireEnregistrer");

formulaireEnregistrer.addEventListener('submit', function (e) {

  // NOM

  let enreNom = document.getElementById("nom")
  let regexNom = /^[a-zA-Z]{3,}$/


  if (enreNom.value == "") {
    let enreErreur1 = document.getElementById("erreur1");
    enreErreur1.innerHTML = " Veuillez remplir le champ vide";
    enreErreur1.style.color = 'red';
    enreErreur1.style.fontStyle = "italic";
    e.preventDefault("");
  } 

  // regex nom
  else if (regexNom.test(enreNom.value) == false) {

    let enreErreur1 = document.getElementById("erreur1");
    enreErreur1.innerHTML = "champ incorrecte. Réessayez avec 3 caractères sans chiffre";
    enreErreur1.style.color = 'red';
    enreErreur1.style.fontStyle = "italic";
    e.preventDefault("");
  } else {
    let enreErreur1 = document.getElementById("erreur1");
    enreErreur1.innerHTML = "champ valide";
    enreErreur1.style.color = 'green';
    enreErreur1.style.fontStyle = "italic";
  };

  //Prenom
  let enrePrenom = document.getElementById("prenom");
  let regexPrenom = /^[a-zA-Z]{3,}$/ ;

  if (enrePrenom.value == "") {
    let enreErreur2 = document.getElementById("erreur2");
    enreErreur2.innerHTML = " Veuillez remplir le champ vide";
    enreErreur2.style.color = 'red';
    enreErreur2.style.fontStyle = "italic";
    e.preventDefault("");

  }// regex prenom 
  else if (regexPrenom.test(enrePrenom.value) == false) {

    let enreErreur2 = document.getElementById("erreur2");
    enreErreur2.innerHTML = " champ incorrecte. Réessayez avec 3 caractères sans chiffre";
    enreErreur2.style.color = 'red';
    enreErreur2.style.fontStyle = "italic";
    e.preventDefault("");
  } else{
    let enreErreur2 = document.getElementById("erreur2");
    enreErreur2.innerHTML = " champ valide";
    enreErreur2.style.color = 'green';
    enreErreur2.style.fontStyle = "italic";
  };

  //Mail
  let enreEmail = document.getElementById("mail");
  let regexMail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/ ;

  if (enreEmail.value == "") {
    let enreErreur3 = document.getElementById("erreur3");
    enreErreur3.innerHTML = " Veuillez remplir le champ vide";
    enreErreur3.style.color = 'red';
    enreErreur3.style.fontStyle = "italic";
    e.preventDefault("");

  } // regex mail 
  else if (regexMail.test(enreEmail.value) == false) {
    let enreErreur3 = document.getElementById("erreur3");
    enreErreur3.innerHTML = " Mail invalide. Veuillez renseigner un mail correct.";
    enreErreur3.style.color = 'red';
    enreErreur3.style.fontStyle = "italic";
    e.preventDefault("");
  } else{
    let enreErreur3 = document.getElementById("erreur3");
    enreErreur3.innerHTML = "champ valide";
    enreErreur3.style.color = 'green';
    enreErreur3.style.fontStyle = "italic";
  };

  //Mot de passe
  let enreMdps = document.getElementById("mdps");
  let regexMdps = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#\+\-\^\[\]]).{8,}$/;

  if (enreMdps.value == "") {
    let enreErreur4 = document.getElementById("erreur4");
    enreErreur4.innerHTML = " Veuillez remplir le champ vide";
    enreErreur4.style.color = 'red';
    enreErreur4.style.fontStyle = "italic";
    e.preventDefault("");

  }// regex Mdps 
  else if (regexMdps.test(enreMdps.value) == false) {

    let enreErreur4 = document.getElementById("erreur4");
    enreErreur4.innerHTML = " Mot de passe incorrecte. Veuillez réessayer avec 1min, 1maj, 1chiffre,1 spec #+-^[]";
    enreErreur4.style.color = 'red';
    enreErreur4.style.fontStyle = "italic";
    e.preventDefault("");
  } else{
    let enreErreur4 = document.getElementById("erreur4");
    enreErreur4.innerHTML = "champ valide";
    enreErreur4.style.color = 'green';
    enreErreur4.style.fontStyle = "italic";
  }

  //Confirmer mot de passe
  let enreConfirmMdps = document.getElementById("cMdps");
  let enreMdpss = document.getElementById("mdps");


  if (enreConfirmMdps.value == "") {
    let enreErreur5 = document.getElementById("erreur5");
    enreErreur5.innerHTML = " Veuillez remplir le champ vide";
    enreErreur5.style.color = 'red';
    enreErreur5.style.fontStyle = "italic";
    e.preventDefault("");
}
  // comparaison mdps
  else if (enreConfirmMdps.value !== enreMdpss.value) {
    let enreErreur5 = document.getElementById("erreur5");
    enreErreur5.innerHTML = " les mots de passe sont différents";
    enreErreur5.style.color = 'red';
    enreErreur5.style.fontStyle = "italic";
    e.preventDefault("");
} else{
  let enreErreur5 = document.getElementById("erreur5");
  enreErreur5.innerHTML = "champ valide";
  enreErreur5.style.color = 'green';
  enreErreur5.style.fontStyle = "italic";
};



 //Local storage

  //récup de l'id
  let prenomVal = document.getElementById("prenom").value;
  let mailVal = document.getElementById("mail").value;
  let passwordVal = document.getElementById("mdps").value;
  
  //envoie dans le localStorage
  localStorage.setItem("prenom",prenomVal);
  localStorage.setItem("mail",mailVal);
  localStorage.setItem("mdps",passwordVal);
});