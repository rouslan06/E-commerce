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
        ?>
        

        <section id="formulaire">
            <?php

                // var_dump($_GET);
                // var_dump($_POST);
                $nom = htmlspecialchars($_POST["nom"]);
                $prenom = htmlspecialchars($_POST["prenom"]);
                $email = htmlspecialchars($_POST["email"]);
                $imageSelectionee = htmlspecialchars($_POST["image"]);
                $password = htmlspecialchars($_POST["password"]);

                if ( $nom == '' || $prenom == '' || $email == '' || $password == '' ) {
                    echo "
                        <br> <br> <br> <br> <br> <br>

                        <p id='nonRempli'>Vous n'avez pas remplis tous les champs !</p>

                        <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    ";
                }
                else {
                    if ( $nom == "teapot" ) {
                        echo "
                            <div id='teapot'>
                                <br> <br> <br> <br> <br> <br>
                                
                                <p>I'm a teapot</p>

                                <br> <br> <br> <br> <br> <br> <br> <br> <br>
                            </div>
                        ";
            
                        http_response_code(418);
                    }
                    else {

                        if ( $imageSelectionee == null ) {
                            $imageProfile = "https://soccerpointeclaire.com/wp-content/uploads/2021/06/default-profile-pic-e1513291410505.jpg";
                        }
                        if ( $imageSelectionee != null ) {
                            $imageProfile = "../../$imageSelectionee";
                        }

        
                        echo "
                            <br> <br>
                            <img class='photoCenter' style='width:100px;' style='height:100px;' src='$imageProfile'/>
                            <br>
                        ";
                        echo "<p class='profileCenter'>$prenom  $nom</p>" ;
                        echo "<p class='profileCenter'>email : $email</p>";
                        //echo "Telephone : $telephone <br> <br>";
                        echo "
                            <p class='profileCenter'>
                            Mot de passe : ********* 
                            </p>

                            <br>
                        ";
                    }
                }
        
                echo "
                    <form id='message' action='./Inscription.php' method='post'>
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

