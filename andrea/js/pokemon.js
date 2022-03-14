/**
 * mise en place api pokemon 
 */

//balise html

const listePU = document.querySelector(".liste-poke");

//nbr dynamique de poke 

const nbrPoke = 201;

//Tableau de datas 

let allPokemon = [];
let tableauFin = [];
let cpTab = [];

/* appel API pokemon */

function findPoke(){

    //url api pokemon 
    
    fetch("https://pokeapi.co/api/v2/pokemon?limit=" + nbrPoke)
        .then( reponse => reponse.json())
        .then((allPoke => {
            //console.log(allPoke);

            allPoke.results.forEach(pokemon => {

                //function pour affichage info complete
                fullInfoPoke(pokemon)
            });
        }))
}

//executer la fonction

findPoke();

//info sur 1 pokemon
function fullInfoPoke(iPokemon){

    let objetPokeFull = {};  //format json vide

    let urlPoke = iPokemon.url;
    let namePoke = iPokemon.name;

    //console.log(urlPoke);


//recuperer les infos sur un pokemon

fetch(urlPoke)

    //reponse appel sur urlPoke
    .then(reponse => reponse.json())
    .then( (dataPoke => {

        //console.log(dataPoke);

        //recup info que je veux 
        /**
         * name
         * sprites
         * id
         */

        objetPokeFull.nom = dataPoke.name;
        objetPokeFull.id = dataPoke.id;
        objetPokeFull.imgF = dataPoke.sprites.front_default; //devant
        objetPokeFull.imgB = dataPoke.sprites.back_default; //arrier

        //console.log(objetPokeFull);

        //info sur la couleur du pokemon

        /**
         * url : https://pokeapi.co/api/v2/pokemon-species
         * id
         */

        fetch("https://pokeapi.co/api/v2/pokemon-species/" + dataPoke.id)
            .then(reponse => reponse.json())
            .then(( dataPoke => {

                //recup color
                /**
                 * color.name = la couleur
                 * names[4].name = vf
                 */


                objetPokeFull.couleur = dataPoke.color.name;
                objetPokeFull.nomF = dataPoke.names[4].name;


                //ajouter allPoke dans un tableau

                allPokemon.push(objetPokeFull);

                //console.log(allPokemon.length);

                if(allPokemon.length == nbrPoke){

                    
                    
                    //console.log(allPokemon[10].nomF);

                    //trier les ids par ordre croissant
                    tableauFin = allPokemon.sort((a ,b) =>{
                        return a.id - b.id
                    }).slice(0, 16);

                    //creation de carte en html
                    createCard(tableauFin)
                }

            }))
    }))
}


function createCard(tab){

    //console.log(tab)

    for(let i=0; i < tab.length; i++){
        
        const carte = document.createElement("li");
        let couleur = tab[i].couleur;

        carte.style.backgroundColor = couleur;


        //ajouter id du pokemon

        const idCarte = document.createElement("h3");
        idCarte.innerHTML = tab[i].id;


        //ajouter le nom du pokemon

        const nomCarte = document.createElement("p");
        nomCarte.innerHTML = tab[i].nom;


        //ajouter l'image du pokemon (front)

        const imgFPoke = document.createElement("img");
        imgFPoke.src = tab[i].imgF ;
        imgFPoke.setAttribute("alt", tab[i].nom)



        //ajouter les li 
        carte.appendChild(idCarte);
        carte.appendChild(nomCarte);
        carte.appendChild(imgFPoke);


        //ajouter back en rollhover
        hoverLI(carte, tab[i].imgB, tab[i].imgF, imgFPoke, nomCarte, tab[i].nomF, tab[i].nom);

        //ajouter dans ul les li
        listePU.appendChild(carte);

    }
}

function hoverLI(carteLI, imgB, imgF, image, p,nomFr, nom){

    carteLI.addEventListener("mouseover", () => {
        //console.log(imgB);

        image.src = imgB ;
        p.innerHTML = nomFr
    });
    
    carteLI.addEventListener("mouseout", () => {

        image.src = imgF ;
        p.innerHTML = nom ;
    });
   
}

//scroll infini
window.addEventListener("scroll", () => {

    const { scrollTop, scrollHeight, clientHeight } = document.documentElement;

    //console.log(scrollTop, scrollHeight, clientHeight);

    if(clientHeight + scrollTop == scrollHeight  ){
    
        addPoke(8);
    };
    
});

//ajout de carte au scroll

let index = 16;
function addPoke(nbrAddCarte){

    //test fin chargement des cartes total
    if( index > nbrPoke){
        return;
    }

    const tabToAdd = allPokemon.slice(index, index+nbrAddCarte);

    createCard(tabToAdd);

    index += nbrAddCarte; 
}


//animation lable et input 
const inputL = document.querySelector('input#find');
inputL.addEventListener("input", (e) => {

    //verifier si input est vide ou pas
    if(e.target.value !== ""){
        //console.log(e.target.parentNode.parentNode)
        /**
         *  e = evenement
         * e.target = input
         * e.target.parentNode = div
         * e.target.parentNode.parentNode = form
         */

        e.target.parentNode.parentNode.classList.add("active-input")
    }else if (e.target.value == ""){
        e.target.parentNode.parentNode.classList.remove("active-input")
    }
} )

// notre systeme de recherche 
inputL.addEventListener("keyup", rechercher);

//function rechercher
function rechercher() {
    //ajouter tout les pokemons
    if(index < nbrPoke){
        addPoke(nbrPoke);
    } 

    let filter, allLi, titleValue , allTitles;

    //mettre en minuscule 
    filter = inputL.value.toLowerCase();

    //recuperer toutes les cartes
    allLi = document.querySelectorAll("li");

    //recuperer tout les titres
    allTitles = document.querySelectorAll("li > p");


    //
    for (let i = 0; i < allLi.length; i++) {
        titleValue = allLi[i].innerHTML;

        // console.log(titleValue);

        //si recherche existe 
        if(titleValue.toLocaleLowerCase().indexOf(filter) > -1){

            //afichage resultat
            allLi[i].style.display = "block";

        }else {
            allLi[i].style.display = "none" ;
        }
        
    }
}