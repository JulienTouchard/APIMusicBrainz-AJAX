const reponseHTML = document.querySelector("#reponse");
// j'ajoute un ecouteur d'evenement submit sur mon formulaire
document.querySelector("#req").addEventListener("submit",(e)=>{
    // je stop le rechargement de ma page avec preventDefault
    e.preventDefault();
    reponseHTML.innerHTML = "";
    console.log(document.querySelector("#artist").value);
    let artist = document.querySelector("#artist").value;
    // premiere etape je contacte l'url de l'api et lui envoie ma requete
    fetch("https://musicbrainz.org/ws/2/artist/?query="+artist+"&fmt=json")
    // j'ATTEND que soient chargées toutes les informations retourner par l'API
    .then((reponse)=>{
         return reponse.json();
        })
    .then((jsonResponse)=>{
        console.dir(jsonResponse);

        jsonResponse.artists.foreach((value)=>{
            console.log(value.name);
            //reponseHTML.innerHTML += "<div>"+value.name+" qui vient de "+value.area.name+"</div>";
            reponseHTML.innerHTML += `<div>${value.name} qui vient de ${value.area.name}</div>`;
        })
    })
    

})