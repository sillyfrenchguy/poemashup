var apikey = "&apikey=5fba767071b5b6b8d367d779b88f6226";
window.onload = recupTop;


const btnValider = document.getElementById("select-box");
var selection = document.getElementsByName("pays");
btnValider.addEventListener('click', function (){
    var card = document.getElementById("conteneur_card_etranger");
    card.innerHTML = "";
    for (var i = 0, length = selection.length; i < length; i++){
        if (selection[i].checked){
            var pays = selection[i].value;
            recupTopE(pays);
            break;
        }
    }
});





function recupTop() {
    ajaxGet("http://api.musixmatch.com/ws/1.1/chart.tracks.get?chart_name=top&page=1&page_size=12&country=fr"+ apikey, function (reponse) {
    var results = JSON.parse(reponse);

    for (var i=0; i<12; i++){
        var titre = results.message.body.track_list[i].track.track_name;
        var artiste = results.message.body.track_list[i].track.artist_name;
        var card = document.getElementById("conteneur_card_fr");
        card.innerHTML += "<div class='card'><div class='structure_card'><div class='contenu_card place'><h2>"+ (i+1) +".</h2></div><div class='contenu_card infos'><h2>"+titre+"</h2><h3>"+artiste+"</h3></div></div></div>";
    }
    
  
    });
    
}

function recupTopA() {
    ajaxGet("http://api.musixmatch.com/ws/1.1/chart.artists.get?page=1&page_size=3&country=fr"+ apikey, function (reponse) {
    var results = JSON.parse(reponse);

    for (var i=0; i<12; i++){
        var titre = results.message.body.track_list[i].track.track_name;
        var artiste = results.message.body.track_list[i].track.artist_name;
        var card = document.getElementById("conteneur_card");
        card.innerHTML += "<div class='card'><div class='structure_card'><div class='contenu_card place'><h2>"+ (i+1) +".</h2></div><div class='contenu_card infos'><h2>"+titre+"</h2><h3>"+artiste+"</h3></div></div></div>";
    }
    
  
    });
    
}

function recupTopE(pays) {
    ajaxGet("http://api.musixmatch.com/ws/1.1/chart.tracks.get?chart_name=top&page=1&page_size=12&country="+pays+""+ apikey, function (reponse) {
    var results = JSON.parse(reponse);

    for (var i=0; i<12; i++){
        var titre = results.message.body.track_list[i].track.track_name;
        var artiste = results.message.body.track_list[i].track.artist_name;
        var card = document.getElementById("conteneur_card_etranger");
        card.innerHTML += "<div class='card'><div class='structure_card'><div class='contenu_card place'><h2>"+ (i+1) +".</h2></div><div class='contenu_card infos'><h2>"+titre+"</h2><h3>"+artiste+"</h3></div></div></div>";
    }
    
  
    });
    
}


var modalA = document.getElementById("modalAngele");

var btnA = document.getElementById("btnAngele");

var span = document.getElementsByClassName("close")[0];

btnA.onclick = function() {
  modalA.style.display = "block";
}

span.onclick = function() {
  modalA.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalA) {
    modalA.style.display = "none";
  }
}

var modalWeeknd = document.getElementById("modalWeeknd");

var btnWeeknd = document.getElementById("btnWeeknd");

var span1 = document.getElementsByClassName("close")[1];

btnWeeknd.onclick = function() {
  modalWeeknd.style.display = "block";
}

span1.onclick = function() {
  modalWeeknd.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalWeeknd) {
    modalWeeknd.style.display = "none";
  }
}

var modalTones = document.getElementById("modalTones");

var btnTones = document.getElementById("btnTones");

var span2 = document.getElementsByClassName("close")[2];

btnTones.onclick = function() {
  modalTones.style.display = "block";
}

span2.onclick = function() {
  modalTones.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalTones) {
    modalTones.style.display = "none";
  }
}