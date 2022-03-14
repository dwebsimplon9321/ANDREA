// c'est un commentaire

// variable

// Comment on declare une variable
let var_1 = 1;
let var_2 = 2;
let var_3 = 4 ;
const var_4 = "Le total est : ";
/**
 * alert(var_4+(var_1 + var_2));
 * alert(var_4+(var_1 - var_2));
 * alert(var_4+(var_3 * var_2));
 * alert(var_4+(var_2 / var_3));
 */

let bh1 = document.querySelector("h1")
bh1.innerHTML = "Hello World"

let bh2 = document.querySelectorAll("h2")
bh2[0].innerHTML = "My name"
bh2[1].innerHTML = "Aie"

let bh3 = document.querySelector("h3")
bh3.innerHTML = "JOJO"

let pi = document.querySelector("p") 
pi.innerHTML = "PI"
let parra = document.querySelector("img")
parra.innerHTML = "F"


let divI = document.querySelector("div.info");

let pHtml = document.createElement("p");
let pText = document.createTextNode("La Dweb maitrise javascript");

pHtml.appendChild(pText);
divI.append(pHtml);
console.log(pHtml);



let reponse = document.querySelector("p.r");
//reponse.innerHTML = prompt("Comment va la DWEB se matin ?");
/**  CODE SALE
* reponse = document.querySelectorAll("span.reponse");
* let conv;
* reponse[0].innerHTML = prompt("Quel est ton NOM ?");
* conv = reponse[0].innerHTML;
* reponse[0].innerHTML = conv.toUpperCase();
* 
* reponse[1].innerHTML = prompt("Quel est ton PRENOM ?");
* reponse[2].innerHTML = prompt("Quel est ton SEXE ?");
* reponse[3].innerHTML = prompt("Quel est ta Date_de_Naissance ?");
* reponse[4].innerHTML = prompt("Quel est ton Lieux_de_Naissance ?");
* reponse[5].innerHTML =  prompt("Quel est ton ADRESSE ?");
* reponse[6].innerHTML =  prompt("Ton CODE_Postal ?");
* reponse[7].innerHTML = prompt("Ta Ville ?");
* conv = reponse[7].innerHTML;
* reponse[7].innerHTML = conv.toUpperCase();
*/

/*
divF = document.querySelector("div.form");
divF.children[0].append(" "+ prompt("Votre nom ?").toUpperCase());
divF.children[1].append(" "+ prompt("Votre prenom ?").toUpperCase());
divF.children[2].append(" "+ prompt("Votre sexe ?").toUpperCase());
divF.children[3].append(" "+ prompt("Votre date de naissance ?").toUpperCase());
divF.children[4].append(" "+ prompt("Votre lieux de naissance ?").toUpperCase());
divF.children[5].append(" "+ prompt("Votre adresse ?").toUpperCase());
divF.children[6].append(" "+ prompt("Votre Code Postal ?").toUpperCase());
divF.children[7].append(" "+ prompt("Votre Ville ?").toUpperCase());
*/

//parcourrir un tableau
/* 
let annee = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"]
annee.forEach(mois => {

    if(mois =="Decembre"){
        let message = "Aymeric est née au mois :"+mois;
    }
});
function afficherNom(){
    let dA = document.querySelector("div.afficher");
    dA.children[0].innerHTML = prompt("Quel est ton NOM ?");
    console.log(dA.children)

    return dA;
}
afficherNom();
*/

//Comment creer une horloge numerique et dynamique
function afficherHeure(){
    //recuperer element html
    let divA = document.querySelector("div.afficher");

    //creer un objet Date
    let objDate = new Date();

    //recuperer et ecrire dasn le paragrapeh
    divA.children[0].innerHTML = "Afficher heure";

    return divA;
}
afficherHeure()