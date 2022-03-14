
/**
 * trouver la paire de cartes
 */

// actions
let returnCard = false;
let firstCard, secondCard;  // declaration multiple a hidden
let blockScreen = false;    // bloquer ecran carte retourne

// 1 - toute les cartes
/**
 * NodeList(52) []
 */
const cards = document.querySelectorAll("div.carte"); 
cards.forEach(card => {
    card.addEventListener("click", cardReturn);
});


// 2 returnCard
function cardReturn(){

    // 4 verifier verrouillage ecran // empeche de cliquer ailleurs durant 1.5s
    /*if(blockScreen === true){
        return;
    } */

    // ou ecriture simple
    if(blockScreen) return;

    // retourner la carte
    //this.childNodes[1].classList.toggle('active');


    if(this.childNodes[1].classList.toggle('active')){
        this.childNodes[1].childNodes[3].innerText = "";
    } else {

       // pour gerer ecriture sur carte verso
        setTimeout( () => {
            
            this.childNodes[1].childNodes[3].innerText = "❓";
        }, 200);
    }
    


    // stocker firstCard // execute une fois sur 2
    if(!returnCard){
        returnCard = true;
        firstCard = this;
        
        return;
    }

    // stocker secondCard  // une fois sur 2
    returnCard = false;
    secondCard = this;

   // console.log(firstCard, secondCard);

    // 3 correspondance
    sameCard();
    
}


// 3 correspondance de cartes
function sameCard(){

    // verifier carte identique
    if(firstCard.getAttribute('data-attr') === secondCard.getAttribute('data-attr')){

        // retirer ecouteur les cartes
        firstCard.removeEventListener("click", cardReturn);
        secondCard.removeEventListener("click", cardReturn);

    } else {
        // verrou sur ecran pendant 1.5s
        blockScreen = true;

        // timer
        setTimeout( () => {

            // retirer class css .active
            firstCard.childNodes[1].classList.remove('active');
            secondCard.childNodes[1].classList.remove('active');

            blockScreen = false;

            // pour gerer ecriture sur carte verso
            setTimeout( () => {
            
                firstCard.childNodes[1].childNodes[3].innerText = "❓";
                secondCard.childNodes[1].childNodes[3].innerText = "❓";
            }, 200);

           
        }, 1500);
    }

    //console.log(firstCard.getAttribute('data-attr') , secondCard.getAttribute('data-attr'));
}

// melanger toutes les cartes
function shuffleCards(){

    // fonction fleche
    cards.forEach(card => {

        // melanger
        /**
         * Math.floor() == renvoi un entier nombre flottant 12.6 => 12
         * Math.random() == 0 et 1 (1 non inclus) de 0 a 0.99
         */
        let randomPos = Math.floor( Math.random() * cards.length);

        // position en css de la carte avec propriete order
        /**
         * https://developer.mozilla.org/fr/docs/Web/CSS/order
         */
        //console.log(randomPos);
        card.style.order = randomPos;
        
    });
    
}

// lancer la fonction shuffleCards()
shuffleCards();