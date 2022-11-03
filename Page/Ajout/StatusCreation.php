<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
    require __DIR__."/../../Classes/Product.class.php";
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
        
        <section id="formulaire">
            <?php

                //On verifie que la requete envoyé est en POST (donc que ca provient bien de l'appel du formulaire)
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    // On verifie qu'on as bien mis le nom dans le formulaire
                    if ($_POST["nom"] != null) {
                        // On INSTANCIE notre nouveau produit, en récupérant ce qu'on as mis dans le formulaire a l'aide de POST
                        $produit = new Product(
                            $_POST["nom"],
                            $_POST["categorie"],
                            $_POST["ht"],
                            $_POST["tva"],
                            $_POST["stock"],
                            $_POST["image"]
                        );
                
                        //var_dump($produit);

                        $valeur = $produit->valorisation();

                    }
                }
  
                $nom = htmlspecialchars($_POST["nom"]);
                $categorie = htmlspecialchars($_POST["categorie"]);
                $ht = htmlspecialchars($_POST["ht"]);
                $tva = htmlspecialchars($_POST["tva"]);
                $stock = htmlspecialchars($_POST["stock"]);
                $imageSelectionee = htmlspecialchars($_POST["image"]);
                //$valorisationStock = valorisation($stock, $ht);

                if ( $nom == '' || $categorie == '' || $ht == '' || $tva == '' || $stock == '' ) {
                    echo "
                        <br> <br> <br> <br> <br> <br>

                        <p id='nonRempli'>Vous n'avez pas remplis tous les champs !</p>

                        <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    ";
                }
                else {
                 
                    if ( $imageSelectionee == null ) {
                        $imageProfile = "https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg";
                    }
                    if ( $imageSelectionee != null ) {
                        $imageProfile = "../../$imageSelectionee";
                    }

    
                    echo "
                        <br>
                        <img class='photoCenter' style='width:100px;' style='height:100px;' src='$imageProfile'/>
                        <br>
                    ";

                    echo "
                        <div class='profileCenter'>

                            <p>Produit : $nom </p>
                            <p>Catégorie : $categorie </p>
                            <p>Prix HT : $ht € </p>
                            <p>TVA : $tva % </p>
                            <p>Stock : $stock unités | valeur du stock : $valeur </p>
                            
                        </div>
                    ";
                }
        
                echo "
                    <form id='message' action='./Ajout.php' method='post'>
                        <input type='submit' value='Retour' />
                    </form>
                ";
            ?>

        </section>

        <?php
            footer();
        ?>

        <br>
        
        <?php
            //var_dump($produit);
        ?>
            
    </body>
</html>

