<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>E-commerce</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Inscription.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();

            echo "
                <form id='formulaire' action='Profile.php' method='post'/>
                    <div id='form'>
                        <h3>Inscription</h3>
                        <input name='nom' placeholder='Nom' value='Uchiwa'/>
                        <input name='prenom' placeholder='Prénom' value='Sasuke'>
                        <input name='email' placeholder='Adresse email' value='uchiwa.sasuke@konoha.jp'/>
                        <p id='pp'>Choisissez une photo de profile :</p>
                        <input id='file' type='file' name='image'/>
                        <input id='mp' name='password' type='password' placeholder='Mot de passe'/>
                        <br> <br> <br>
                        <input id='envoyer' type='submit' value='Envoyer' />
                    </div>
                </form>
            ";

            footer();

            // <input type="file" name="image"/>
        ?>

    </body>
</html>