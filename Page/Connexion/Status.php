<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>E-commerce</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Connexion.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>
        

        <section id="formulaire">
            <?php

                // var_dump($_GET);
                // var_dump($_POST);
                $email = htmlspecialchars($_POST["email"]);
                $password = htmlspecialchars($_POST["password"]);

                if ( $email == '' || $password == '' ) {
                    echo "
                        <br> <br> <br> <br> <br> <br>

                        <p id='nonRempli'>Vous n'avez pas remplis tous les champs !</p>

                        <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    ";
                }
                else {

                    echo "
                        <br> <br> <br> <br> <br> <br>

                        <p id='status'>Vous êtes connecté</p>

                        <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    ";

                }
        
                echo "
                    <form id='message' action='./Connexion.php' method='post'>
                        <input type='submit' value='Retour' />
                    </form>
                ";
            ?>

        </section>

        <?php
            footer();
        ?>
            
    </body>
</html>