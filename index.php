<!doctype html>

<?php
    require __DIR__."/Component/menu.php";
    require __DIR__."/Component/footer.php";
    require __DIR__."/Classes/Product.class.php";
?>

<html>

    <head>
        <title>E-commerce</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./index.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu();
        ?>

        <section id="formulaire">

            <form id='actionRecherche' method='GET'>
                <input id='recherche' placeholder='Recherche'/>
                <input id='trouve' type='submit' value='Rechercher'/>
            </form>

            <form 
                id='AJOUT' 
                style='
                    text-align: center; 
                    margin-top: 10px; 
                    width: 357px; 
                    margin-left: auto;
                    margin-right: auto;
                ' 

                action='./Page/Ajout/Ajout.php' 
                method='post'>

                <input 
                    id='AJOUTER' 
                    style='
                        width: 100%; 
                        border: 2px solid black; 
                        border-radius: 5px;

                    ' 
                    type='submit' 
                    value='Ajouter un produit'/>
            </form>

            <section id='scroll'>

                <?php
                
                    $titre = "LES PRODUITS <br>";

                    $GTA_4 = new Product("GTA 4", "action", 50, "https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/IV.jpg");
                    $GTA_5 = new Product("GTA 5", "action", 50, "https://image.jeuxvideo.com/medias-sm/163129/1631287693-8700-jaquette-avant.jpg");
                    $MW_2 = new Product("MW 2", "action", 50, "https://d3isma7snj3lcx.cloudfront.net/optim/images/gallery/36/363231/call-of-duty-modern-warfare-2-2022-pc-ps5-xbox-x-s-22e1a1dc__220_220__218-259-1421-1462.jpg");
                    $WOW = new Product("WOW", "action", 50, "https://image.jeuxvideo.com/images/pc/w/o/wowapc0f.jpg");
                    $THE_ELDER_SCROLLS = new Product("THE ELDER SCROLLS", "action", 50, "https://i.blogs.es/af410f/the-elder-scrolls-online/450_1000.webp");
                    $MARIO_BROS = new Product("MARIO BROS", "action", 50, "https://d3isma7snj3lcx.cloudfront.net/optim/images/gallery/26/26635/super-mario-bros-nes-155dee7e__1080_900__381-0-1632-1050.jpg");
                    $ZELDA = new Product("ZELDA", "action", 50, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbLCcsgON93f-LLZAM1Ca5-oVt2uSAIOAS63Az3hXXpXQ1--Cn3FCNhxstBHk4XyzBPUs&usqp=CAU");
                    $RED_DEAD_REDEMPTION = new Product("RED DEAD REDEMPTION", "action", 50, "https://upload.wikimedia.org/wikipedia/en/a/a7/Red_Dead_Redemption.jpg");
                    $RED_DEAD_REDEMPTION_2 = new Product("RED DEAD REDEMPTION 2", "action", 50, "https://images.squarespace-cdn.com/content/v1/5b5342629772ae59ffa156b6/1537268750791-U7MXJF59HSGHZYX80MAP/red-dead-redemption-2-buttonjpg-f9ad35.jpg?format=1500w");
                    $DEAD_SPACE = new Product("DEAD SPACE", "action", 50, "https://media.contentapi.ea.com/content/dam/eacom/dead-space/images/2022/10/dead-space-featured-image.adapt.crop191x100.1200w.");
            
                    $produits = [
                        $GTA_4,
                        $GTA_5,
                        $MW_2,
                        $WOW,
                        $THE_ELDER_SCROLLS,
                        $MARIO_BROS,
                        $ZELDA,
                        $RED_DEAD_REDEMPTION,
                        $RED_DEAD_REDEMPTION_2,
                        $DEAD_SPACE
                    ];

                    echo "<p style='font-weight:bold;'> $titre <p> <br>";

                    foreach($produits as $jeux) {

                        echo "
                        <div class='scroll-container'>
                            
                            <p style='font-weight:bold;'>$jeux->nom</p>
                            PRIX : $jeux->prixHT € <br> <br>
                            CATEGORIE : $jeux->categorie <br> <br>
                            <img width='250' height='200' src='$jeux->image'> <br> <br>
                        
                        </div>
                    ";
            
                        echo "<br>";

                    }

                ?>
            
            </section>

        </section>

        <?php
            footer();
        ?>

    </body>
</html>