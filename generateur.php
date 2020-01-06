<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/Poemashup/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="js/ajax.js"></script>
    <title>Poëmashup | Générateur</title>
</head>
<body>
    <div id="header">
        <?php
            include("parties/header.php");
        ?>
    </div>
    <div id="bandeau_incl">
        <?php
            include("parties/bandeau.php");
        ?>
    </div>

    <div id="generateur">
        <div id="conteneur_form">
            <div class="structure_form">
                <div class="contenu_form">
                    <h2>Générez vos paroles</h2>
                    <section id="form">
                    <input type="text" name="chanson" id="chanson" value="" placeholder="Titre de la chanson, Nom de l’artiste"/><br>
                        <label for="selecteur_vers">Nombre de vers :</label>
                        <select name="nombre_vers" id="selecteur_vers">
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <div id="boutons">
                            <button id="ajouter" title="Ajouter une chanson">+</button>
                            <button id="valider" title="Créer votre Poemashup">∞</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div id="poemashup">
        <div id="conteneur_poemashup">
        <div class="alert success" id="info">
		        <label class="close" id="close" title="Fermer la notice !" for="alert2">✖</label>
                <p class="inner"><strong>Créez votre Poëmashup en quelques secondes !</strong> <br>
                - Ajoutez une chanson, choisissez le nombre de vers et cliquez sur "+". <br>
                - Une fois votre sélection faite, cliquez sur "∞".

                </p>
	        </div>
            <div class="structure_poemashup">
                <div class="contenu" id="contenu_infos">
                    <h2>// Vos titres et artistes</h2>
                    <div class="alert success" id="info_titre">
                        <p class="inner">Aucun titre n'a été ajouté pour le moment.</p>
	                </div>
                </div>
            </div>
            <div class="structure_poemashup">
                <div class="contenu">
                    <h2>// Votre Poemashup</h2>
                    <div class="alert success" id="info_poemashup">
                        <p class="inner">Veuillez cliquer sur "∞" pour visualiser votre Poëmashup.</p>
	                </div>
                    <div id="reponse">

                    </div>
                </div>
            </div>
            <div class="structure_poemashup">
                <div class="contenu">
                    <h2>// LES MEILLEURS POËMASHUP DE L'EQUIPE</h2>
                </div>
            </div>
            <div class="structure_poemashup">
                <div class="contenu_moment">
                    <img src="img/sterenn.png" alt="" id="btnAngele">
                </div>
                <div class="contenu_moment">
                    <img src="img/theo.png" alt="" id="btnWeeknd">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sterenn -->
    <div id="modalAngele" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="img/fiche_the_weeknd.png" alt="En savoir plus sur Sterenn">
        </div>
    </div>

    <!-- Modal Théo -->
    <div id="modalTheo" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="img/fiche_the_weeknd.png" alt="En savoir plus sur The Weeknd">
        </div>
    </div>

    <?php
            include("parties/footer.php");
        ?>
</body>
    <script src="js/requetes.js"></script>
</html>