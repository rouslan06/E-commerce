<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>E-commerce</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Ajout.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>
            
        <form id='formulaire' action='StatusCreation.php' method='post'>
            <div id='form'>
                <h3>Création de produit</h3>
                <input name='nom' placeholder='Nom' />
                <input name='categorie' placeholder='Catégorie' value='action' />
                <input name='ht' placeholder='Prix hors taxe' value='20' /> 
                <input name='tva' placeholder='TVA' value='0.20' /> 
                <input name='stock' placeholder='Stock' value='1000' />
                <input id='file' type='file' name='image' />
                <br> <br>
                <input id='creer' type='submit' value='Créer' />
            </div>
        </form>
            
        <?php
            footer();
            // <input type="file" name="image"/>
        ?>

    </body>
</html>