var apikey = "&apikey=5fba767071b5b6b8d367d779b88f6226";
var mashup = [];

const btnAjouter = document.getElementById("ajouter");
btnAjouter.addEventListener('click', rechercheParoles);
btnAjouter.addEventListener('click', function() {
    document.getElementById('info_titre').style.display = 'none';
});

const btnValider = document.getElementById("valider");
btnValider.addEventListener('click', afficheMashup);
btnValider.addEventListener('click', function() {
    document.getElementById('info_poemashup').style.display = 'none';
});

const btnClose = document.getElementById("close");
btnClose.addEventListener('click', function() {
    document.getElementById('info').style.display = 'none';
});


var compteur = 0;

function rechercheParoles (){
    var chanson = document.getElementById("chanson").value;
    var parole1 = recupPhrase(chanson);
    
}


function recupPhrase(chanson) {
    ajaxGet("http://api.musixmatch.com/ws/1.1/track.search?q=" + chanson + "&page_size=1&page=1&s_track_rating=desc"+ apikey, function (reponse) {
    var results = JSON.parse(reponse);
    var titre_id = results.message.body.track_list[0].track.track_id;
    var nombreVers = document.getElementById("selecteur_vers").value;
    var titre = results.message.body.track_list[0].track.track_name;
    var artiste = results.message.body.track_list[0].track.artist_name;
    afficheInfos(titre, artiste, nombreVers);

    var lien = "https://api.musixmatch.com/ws/1.1/track.lyrics.get?track_id=" + titre_id + apikey;
        ajaxGet(lien, function (reponse2) {
            var recherche = JSON.parse(reponse2);
            var extrait = recherche.message.body.lyrics.lyrics_body;

            var phrases = extrait.split("\n");

            var j = getRandomInt(7);
            
            
            phrases = phrases.filter(Boolean);

            for(var i=0; i< nombreVers; i++ ){
                mashup.push(phrases[j+i]);
                compteur +=1;
            }
            document.getElementById("chanson").value = ""; 
        });
    });
    
}

function getRandomInt(max){
    return Math.floor(Math.random() * Math.floor(max));
}

function afficheInfos(titre, artiste, nombreVers){
    var infos = document.createElement("p");
    infos.innerHTML = "<i>" + titre + " </i> - " + artiste + " (" + nombreVers + " vers)</br>";

    var divInfos = document.getElementById("contenu_infos");
    divInfos.appendChild(infos);
}

function afficheMashup(){
    mashup.sort();
    var vers = document.createElement("p");
    for (var i=0; i<compteur; i++){
        vers.innerHTML += mashup[i] + "</br>";
    }
    var reponse = document.getElementById("reponse");
    reponse.appendChild(vers);
}


var modalS = document.getElementById("modalSterenn");

var btnS = document.getElementById("btnSterenn");

var span = document.getElementsByClassName("close")[0];

btnS.onclick = function() {
  modalS.style.display = "block";
}

span.onclick = function() {
  modalS.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalS) {
    modalS.style.display = "none";
  }
}

var modalT = document.getElementById("modalTheo");

var btnT = document.getElementById("btnTheo");

var span1 = document.getElementsByClassName("close")[1];

btnT.onclick = function() {
  modalT.style.display = "block";
}

span1.onclick = function() {
  modalT.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalT) {
    modalT.style.display = "none";
  }
}

