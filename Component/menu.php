<!doctype html>

<html>

    <head>
        <title>E-commerce</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Component/menu.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php

            function menu() {

                echo "
                    <div id='menu'>
                        <form id='Accueil' method='post'>
                            <input class='menu' type='submit' value='Accueil' />
                        </form>

                        <form id='Blog' action='./Page/Blog/Blog.php' method='post'>
                            <input class='menu' type='submit' value='Blog' />
                        </form>
                
                        <form id='Connexion' action='./Page/Connexion/Connexion.php' method='post'>
                            <input class='menu' type='submit' value='Connexion' />
                        </form>
        
                        <form id='Inscription' action='./Page/Inscription/Inscription.php' method='post'>
                            <input class='menu' type='submit' value='Inscription' />
                        </form>

                        <form id='Contact' action='./Page/Contact/Contact.php' method='post'>
                            <input class='menu' type='submit' value='Contact' />
                        </form>
                    </div>
                ";

                echo "
                    <h2 id='titrePrincipale' style='text-align:center;' >
                        E-commerce
                    </h2>
                ";
            }

        ?>

    </body>
</html>
