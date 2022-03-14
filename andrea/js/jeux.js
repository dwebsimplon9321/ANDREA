// commentaire
/**
 *  Commentaire multy ligne */
/**
 * generer nombre aleatoire entre 1 et 150
 * afficher limite aleatoire de 1 à n
 * recuperer nombre proposer
 * verifier le nombre
 * - si le nombre bon:
 *  Aficcher message WIN
 * 
 * - si le nombre pas bon:
 * verifier limite:
 * - si limite atteinte:
 * afficher bon nombre
 * afficher msg LOSE
 * 
 * - si limite atteinte non atteinte:
 * afficher indice
 */

// generer un nombre aleatoire entre 1 et 150
function devineMoi(min, max){
    //generateur aleatoire 
    return Math.floor(Math.random() * max) +min;
}
let resultat = devineMoi(1, 150);
console.log(resultat)
// alert(resultat);

// generer un nombre aleatoire entre 1 et 150
function essai(min, max){
    //generateur aleatoire 
    return Math.floor(Math.random() * max) +min;
}
let nbrE = essai(1, 15);

//affiche nbrE dans le jeux
let spanE = document.querySelector("span.essais");
spanE.innerHTML = nbrE;

//ecouteur sur le bonton 'reponse'
let bt = document.querySelector("button");
bt.addEventListener("click", function(){
    let reponse = document.querySelector("input#reponse");

    //comparer les reponse
    if (reponse.value  == resultat) {
        let win = document.querySelector("input.reponse");
        win.innerHTML = "YOU WIN !!!";
       
    } else {
        
        console.log("non, le bon nombre est :"+resultat);
        //nbrE = nbrE - 1 ;
        console.log("Essaie:"+nbrE)
        if (nbrE-- <= 0) {
            console.log("perdu");
        } else{
            console.log("essaie encore")
        }
    }
    



} );