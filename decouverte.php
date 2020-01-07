<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/Poemashup/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Poemashup/css/select.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/Poemashupimg/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Poemashupimg/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Poemashupimg/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.3/css/flag-icon.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500&display=swap" rel="stylesheet">
    

    <script src="js/ajax.js"></script>

    <title>Poëmashup | Découverte</title>
</head>
<body>
    <div id="header">
        <?php
            include("parties/header_decouverte.php");
        ?>
    </div>
    <div id="bandeau_incl">
        <?php
            include("parties/bandeau_decouverte.php");
        ?>
    </div>

    <div id="topChansons">
        <div id="conteneur_Chansons">  
            <div class="structure_Chansons">
                <div class="contenu" id="contenu_infos">
                    <h2>// TOP 12 FRANCE</h2>
                    <div class="alert decouverte" id="info_titre">
                        <p class="inner">Découvrez les titres les plus écoutés en France !</p>
	                </div>
                </div>
            </div>
        </div>
    </div>

    <div id="top_card">
        <div id="conteneur_card_fr" class="conteneur_card">
            <!-- <div class="card">
                <div class="structure_card">
                    <div class="contenu_card place">
                        <h2>1.</h2>
                    </div>
                    <div class="contenu_card infos">
                        <h2>All I Want For Christmas Is You</h2>
                        <h3>Mariah Carey</h3>
                    </div>
                </div>
            </div> -->
        </div>
        
    </div>
    <div id="topArtistes">
        <div id="conteneur_Artistes">
            
            <div class="structure_Artistes">
                <div class="contenu" id="contenu_infos">
                    <h2>// TOP 12 à travers le monde</h2>
                    <div class="alert decouverte" id="info_titre">
                        <p class="inner">Découvrez les titres les plus écoutés à travers le monde !</p>
                    </div>
                    
                    
                    <div id="app-cover">
                        <div id="select-box">
                            <input type="checkbox" id="options-view-button">
                            <div id="select-button" class="brd">
                                <div id="selected-value">
                                    <span>Choisissez un pays</span>
                                </div>
                                <div id="chevrons">
                                    <i class="fas fa-chevron-up"></i>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div id="options">
                                <div class="option">
                                    <input class="s-c top" type="radio" name="pays" value="de">
                                    <input class="s-c bottom" type="radio" name="pays" value="de">
                                    <i class="fab flag-icon flag-icon-de"></i>
                                    <span class="label">Allemagne</span>
                                    <span class="opt-val">Allemagne</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="pays" value="gb">
                                    <input class="s-c bottom" type="radio" name="pays" value="gb">
                                    <i class="fab flag-icon flag-icon-gb"></i>
                                    <span class="label">Grande Bretagne</span>
                                    <span class="opt-val">Grande Bretagne</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="pays" value="it">
                                    <input class="s-c bottom" type="radio" name="pays" value="it">
                                    <i class="fab flag-icon flag-icon-it"></i>
                                    <span class="label">Italie</span>
                                    <span class="opt-val">Italie</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="pays" value="es">
                                    <input class="s-c bottom" type="radio" name="pays" value="es">
                                    <i class="fab flag-icon flag-icon-es"></i>
                                    <span class="label">Espagne</span>
                                    <span class="opt-val">Espagne</span>
                                </div>
                                <div class="option">
                                    <input class="s-c top" type="radio" name="pays" value="us">
                                    <input class="s-c bottom" type="radio" name="pays" value="us">
                                    <i class="fab flag-icon flag-icon-us"></i>
                                    <span class="label">Etats-Unis</span>
                                    <span class="opt-val">Etats-Unis</span>
                                </div>
                                         
                                            
                                <div id="option-bg"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="top_card">
        <div id="conteneur_card_etranger" class="conteneur_card">
        </div>
        
    </div>


    <div id="topArtistes">
        <div id="conteneur_Artistes">
            
            <div class="structure_Artistes">
                <div class="contenu" id="contenu_infos">
                    <h2>// ARTISTES DU MOMENT</h2>
                    <div class="alert decouverte" id="info_titre">
                        <p class="inner">Faites connaissance avec les artistes les plus populaires du moment !</p>
	                </div>
                </div>
            </div>
            <div class="structure_Artistes">
                <div class="contenu_moment">
                    <img src="img/moment_angele.png" alt="" id="btnAngele">
                </div>
                <div class="contenu_moment">
                    <img src="img/moment_the_weeknd.png" alt="" id="btnWeeknd">
                </div>
                <div class="contenu_moment">
                    <img src="img/moment_tones_and_i.png" alt="" id="btnTones">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Angèle -->
    <div id="modalAngele" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="img/fiche_angele.png" alt="En savoir plus sur Angèle">
        </div>
    </div>

    <!-- Modal The Weeknd -->
    <div id="modalWeeknd" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="img/fiche_the_weeknd.png" alt="En savoir plus sur The Weeknd">
        </div>
    </div>

    <!-- Modal Tones and I -->
    <div id="modalTones" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="img/fiche_tones_and_i.png" alt="En savoir plus sur Tones and I">
        </div>
    </div>

    

    <?php
            include("parties/footer.php");
        ?>
</body>
    <script src="js/decouverte.js"></script>
</html>