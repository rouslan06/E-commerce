<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Connexion.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();

            echo "
                <form id='formulaire' action='Status.php' method='post'/>
                    <div id='form'>
                        <h3>Connexion</h3>
                        <input name='email' placeholder='Adresse email' value='uchiwa.sasuke@konoha.jp'/>
                        <input id='mp' name='password' type='password' placeholder='Mot de passe'/>
                        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                        <input id='envoyer' type='submit' value='Connexion' />
                    </div>
                </form>
            ";

            footer();

        ?>

    </body>
</html>