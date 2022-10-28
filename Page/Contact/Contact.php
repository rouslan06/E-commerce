<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Contact.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>

        <section id="formulaire">

            <?php

                echo "<br> <br> <br> <p id='center'>Contact</p>";

            ?>

        </section>

        <?php
            footer();
        ?>

    </body>
</html>