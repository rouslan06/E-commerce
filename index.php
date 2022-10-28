<!doctype html>

<?php
    require __DIR__."/Component/menu.php";
    require __DIR__."/Component/footer.php";
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

            <?php
                echo "
                    <input id='recherche' placeholder='Recherche'>
                ";
            ?>

            <section id='scroll'>

                <?php
                
                    $titre = "LES PRODUITS <br>";

                    $produits = [
                        "GTA 4" => ["https://media-rockstargames-com.akamaized.net/rockstargames-newsite/img/global/games/fob/640/IV.jpg"],
                        "GTA 5" => ["https://image.jeuxvideo.com/medias-sm/163129/1631287693-8700-jaquette-avant.jpg"],
                        "MW 2" => ["https://d3isma7snj3lcx.cloudfront.net/optim/images/gallery/36/363231/call-of-duty-modern-warfare-2-2022-pc-ps5-xbox-x-s-22e1a1dc__220_220__218-259-1421-1462.jpg"],
                        "WOW" => ["https://image.jeuxvideo.com/images/pc/w/o/wowapc0f.jpg"],
                        "THE ELDER SCROLLS" => ["https://i.blogs.es/af410f/the-elder-scrolls-online/450_1000.webp"],
                        "MARIO BROS" => ["https://d3isma7snj3lcx.cloudfront.net/optim/images/gallery/26/26635/super-mario-bros-nes-155dee7e__1080_900__381-0-1632-1050.jpg"],
                        "ZELDA" => ["https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbLCcsgON93f-LLZAM1Ca5-oVt2uSAIOAS63Az3hXXpXQ1--Cn3FCNhxstBHk4XyzBPUs&usqp=CAU"],
                        "RED DEAD REDEMPTION" => ["https://upload.wikimedia.org/wikipedia/en/a/a7/Red_Dead_Redemption.jpg"],
                        "RED DEAD REDEMPTION 2" => ["https://images.squarespace-cdn.com/content/v1/5b5342629772ae59ffa156b6/1537268750791-U7MXJF59HSGHZYX80MAP/red-dead-redemption-2-buttonjpg-f9ad35.jpg?format=1500w"],
                        "DEAD SPACE" => ["https://media.contentapi.ea.com/content/dam/eacom/dead-space/images/2022/10/dead-space-featured-image.adapt.crop191x100.1200w."]
                    ];

                    echo "<br> $titre <br>";

                    foreach($produits as $jeux => $lien) {

                        echo "$jeux<br> <br>";
            
                        foreach($lien as $secondValue) {

                            echo "
                                <div class='scroll-container'>
                                    <img width='300' height='300' src='$secondValue'>
                                </div>
                            ";
                        }
            
                        echo "<br> <br>";

                    }

                ?>
            
            </section>

        </section>

        <?php
            footer();
        ?>

    </body>
</html>