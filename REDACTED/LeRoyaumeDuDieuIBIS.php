<?php

/*REDACTED*/

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PandoutiX</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="../style/portfolio.css">
        <link rel="icon" type="image/png" href="../image/Favicon.png"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <img class="navbar-brand" id="logo" src="../image/Logo.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="navbar-icon" class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" role="button" style="color : #00A6CE;">ETATs <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <br/>
        <div class="container"> <!-- On commence à définir la zone où l'on va contenir tous nos grids. -->
            <div class="row">   <!-- On ouvre également une rangée qui va nous permettre d'accueil toutes nos grids sur une même ligne pour tout centrée. -->
                <div class="col-3"></div>   <!-- Ici on divise affecte 3 grids à notre div. -->
                <div class="col-6">    <!-- Ici on affecte 6 autres grids à notre page ce qui aura pour éffet de centrer notre div. -->
                    <!-- ETAT -->
                    <div class="row">
                        <div class="list-group-item list-group-item-action card card-body" style="background-color : #343A40; color : #00A6CE;">
                            <label>ETAT</label>
                        </div>
                        <div class="list-group-item col">
                            <?php echo($ImgStateIS); ?>
                            <hr/>
                            <center><a>C4SE</a></center>
                        </div>
                        <div class="list-group-item col">
                            <?php echo($ImgStateLocalhost); ?>
                            <hr/>
                            <center><a>Moi ?</a></center>
                        </div>
                    </div>
                    <br/>
                    <!-- Keepalive -->
                    <div class="list-group">
                        <div class="list-group-item list-group-item-action card card-body" style="background-color : #343A40; color : #00A6CE;">
                            <label>Keepalive</label>
                        </div>
                        <div class="list-group-item">
                            <form method="POST" actoion="#">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="host" value="c4se.fr" checked>
                                    <label class="form-check-label">
                                        Ingénierie Système (C4SE.fr)
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="host" value="localhost">
                                    <label class="form-check-label">
                                        Turbo bg, pec bombé (moi)
                                    </label>
                                </div>
                                <hr/>   <!-- Balise HTML qui créer un séparateur. -->
                                <button type="submit" class="btn" style="background-color : #343A40; color : #00A6CE; width : 50%; display : block; margin : auto;">Stay alive !</button>    <!-- On crée donc le boutton de type submit qui va envoyer notre formulaire. Avec des couleurs etc ... de manière centré. On envoit le tout vers la fonction JavaScript form avec comme paramètres le nom de compte, le mot de passe avec les challenges serveur et client. -->
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>   <!-- Encore une fois défini une zone de 3 grids pour faire en sorte que notre menu soit centrer. -->
            </div>
        </div>
    </body>
    <footer>
        <div>
            <hr>
            <h6>Tout droit réservé @ xThaz</h6>
        </div>
    </footer>
</html>