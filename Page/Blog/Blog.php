<!doctype html>

<?php
    require __DIR__."/../../Component/menu2.php";
    require __DIR__."/../../Component/footer.php";
?>

<html>

    <head>
        <title>Accueil</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./Blog.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>

        <?php
            menu2();
        ?>

        <div id='main'>
            <section id="formulaire">

                    <div class="scroll-page" id="page-1">
                        <iframe
                            src="https://youtu.be/JQicBpgaxM0?t=298?autoplay=1&mute=1">
                        </iframe>
                    </div>
                    
                    <div class="scroll-page" id="page-2">2</div>
                    <div class="scroll-page" id="page-3">3</div>
                    <div class="scroll-page" id="page-4">4</div>
                    <div class="scroll-page" id="page-5">5</div>

            </section>

            <section id='filtre'>

                <p>FILTRER</p>

                <nav id='nav'>

                <ul id='list'>
                    <li><a href="#page-1">Action</a></li>
                    <li><a href="#page-2">Aventure</a></li>
                    <li><a href="#page-3">Horreur</a></li>
                    <li><a href="#page-4">Exploration</a></li>
                    <li><a href="#page-5">Histoire</a></li>
                </ul>

                </nav>

            </section>
        </div>

        <?php
            footer();
        ?>

    </body>
</html>