/**
 * 
 */

// formulaire - les boutons 
const btCommunes = document.querySelectorAll("button.btCom");
const divCommune = document.querySelector("div.reponse");

console.log(btCommunes);

// boucle for

for(let i=0; i < btCommunes.length; i++){
    //console.log(i);

    btCommunes[i].addEventListener("click", commune);
}
function commune(){
    //console.log(this);

    //stopper à 5 communes
    if(divCommune.childElementCount === 5){
        // aficher / stocker donnees des communes
        stocke_commune(divCommune);
        false;

    } else {

        //
        divCommune.appendChild(this);
        // 
        this.classList.remove("btn-primary");
        this.classList.add("btn-warning");
        

    }

}

function stocke_commune(blockC){
    console.log(blockC.lenght);
    console.log(blockC.children[0].innerHTML);

}