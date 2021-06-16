<!DOCTYPE html>      <!-- On précise que notre document est une page HTML. -->
<html>
    <head>
        <meta charset="utf-8">      <!-- On dit ici que l'unicode à utiliser sur la page est utf-8. -->
        <title>Vive IBIS !</title>     <!-- On défini le titre de la page. -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php

        if ((isset($_COOKIE["Errored?"]))&&($_COOKIE["Errored?"]==="true")){
            echo('<link rel="stylesheet" type="text/css" media="screen" href="../style/error.css"> <!-- Importation de la fiche de style css à utiliser. -->');
        } else {
            echo('<link rel="stylesheet" type="text/css" media="screen" href="../style/login.css"> <!-- Importation de la fiche de style css à utiliser. -->');
        }

        ?>
        <link rel="icon" type="image/png" href="../image/Panda.jpeg"/>

        <!-- Les 4 liens suivant sont pour l'utilisation de BootStrap 4.3.X -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="../js/index.js" type="text/javascript"></script>      <!-- On importe la librairie JavaScript pour le Sha1 côté client.  -->
    </head>
    <body>
        <div class="container"> <!-- On commence à définir la zone où l'on va contenir tous nos grids. -->
            <div class="row">   <!-- On ouvre également une rangée qui va nous permettre d'accueil toutes nos grids sur une même ligne pour tout centrée. -->
                <div class="col-3"></div>   <!-- Ici on divise affecte 3 grids à notre div. -->
                <div class="col-6">    <!-- Ici on affecte 6 autres grids à notre page ce qui aura pour éffet de centrer notre div. -->
                    <img src="../image/Panda.jpeg" id="logo" class="rounded mx-auto d-block">  <!-- Importation du logo de PandatiX de manière centerer -->
                    <div>   <!-- On ouvre notre div qui va servir à accueillir le champ login ainsi que sa zone de texte. -->
                        <a class="list-group-item" style="background-color : #343A40;">  <!-- On défini la couleur de notre arrière plan, la couleur de notre texte. Et on lui dit que c'est un item dans notre group de list ce qui aura pour effet de crée notre zone orange. -->
                            <label class="FieldColor">LOGIN</label>    <!-- On écrit donc dedans "LOGIN". -->
                        </a>
                        <a class="list-group-item"> <!-- On ouvre un nouvel item dans la list de group.-->
                            <input type="text" class="form-control" id="Login" name="Login" placeholder="Login" required>   <!-- Ici on défini une zone de texte où l'on doit rentrer un email pour se connecter. Pour pouvoir envoyer le formulaire il est obligatoire d'avoir remplir le champ.-->
                        </a>
                    </div>
                    <form class="list-group shadow" action="connexion.php" method="POST" onsubmit="hashing()">  <!-- On ouvre notre variable form qui va accueillir notre formulaire, alors on définie un group de list qui définira par la suite l'espace de notre formulaire. On lui affecter aussi des effets d'ombre. On lui dit qu'une fois le bouton submit et le script terminé on envoit vers connexion.php avec la méthode POST. -->
                        <div>
                            <a class="list-group-item" style="background-color : #343A40;">    <!-- On défini la couleur de notre arrière plan, la couleur de notre texte. Et on lui dit que c'est un item dans notre group de list ce qui aura pour effet de créer notre zone orange. -->
                                <label class="FieldColor">MOT DE PASSE</label> <!-- On décrit donc dedans "MOT DE PASSE". -->
                            </a> 
                            <a class="list-group-item"> <!-- On ouvre un nouvel item dans la list de group. -->
                                <input type="password" class="form-control" id="Password" name="Password" placeholder="Mot de passe" required>   <!-- Ici on défini une zone de texte où l'on doit rentrer le mot de passe pour se connecter. Pour pouvoir envoyer le formulaire il est obligatoire d'avoir remplir le champ.-->
                                <hr/>   <!-- Balise HTML qui créer un séparateur. -->
                                <?php

                                if ((isset($_COOKIE["Errored?"]))&&($_COOKIE["Errored?"]==="true")){
                                    echo('<button type="submit" class="btn" style="background-color : #343A40; width : 50%; display : block; margin : auto; color : #db1f48;">Connexion</button>    <!-- On crée donc le boutton de type submit qui va envoyer notre formulaire. Avec des couleurs etc ... de manière centré. On envoit le tout vers la fonction JavaScript form avec comme paramètres le nom de compte, le mot de passe avec les challenges serveur et client. -->');
                                } else {
                                    echo('<button type="submit" class="btn" style="background-color : #343A40; width : 50%; display : block; margin : auto; color : #00A6CE;">Connexion</button>    <!-- On crée donc le boutton de type submit qui va envoyer notre formulaire. Avec des couleurs etc ... de manière centré. On envoit le tout vers la fonction JavaScript form avec comme paramètres le nom de compte, le mot de passe avec les challenges serveur et client. -->');
                                }

                                ?>                            
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>   <!-- Encore une fois défini une zone de 3 grids pour faire en sorte que notre menu soit centrer. -->
            </div>
        </div>
    </body>
</html>