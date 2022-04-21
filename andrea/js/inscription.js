 
let add =  document.getElementById("add")


add.addEventListener("click",ajouterChien)

function ajouterChien(event) {
    
    event.preventDefault()
    event.stopPropagation()
    console.log("Ajouter chien")

    
    let div = document.getElementById("clone")

    div_clone = div.cloneNode(true)

    div.appendChild(div_clone)

   

    // ajouter un champs imput file

    const addF = document.querySelector("div.addF")

    // // creation input
    const inputF = document.createElement("input")
    
    inputF.setAttribute("type", "file")
    inputF.setAttribute("class", "form-control")
    inputF.setAttribute("accept", ".jpg, .jpeg, image/jpg, image/png, application/pdf, image/webpimage/heif, image/heif-sequence, image/heic, image/heic-sequence; image/avif, image/avif-sequence")
    inputF.setAttribute("name", "cyno2[]")
    inputF.setAttribute("multiple","")

    addF.appendChild(inputF) 
    
    //  let adherant = document.querySelectorAll("div.adherant")
    //  adherant[1].remove()
    add.remove()
  }



