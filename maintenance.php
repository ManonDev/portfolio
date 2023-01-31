<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type="description" content="Portfolio 2021, contenant divers projets web.">
        <meta name="robots" content="noindex, nofollow">
        <link href="./design/sass_css/default.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/ico" href="pictures/logo1.png"/>
        <title>Manon Bayer | DevFE</title>
    </head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->

    <body>

         <!-- HEADER INCLUDE -->
        <?php include('design/header.php'); ?>

        <!--INTRO-->
        <div class="contener">
            <section>
                <h3>Qui suis-je ?</h3>
                <div id="presentation">
                    <p>
                   
                   
                </div>
            </section>

            <!--PROJECTS-->
            <section>
                <h3>Mes projets</h3>
                <div id="projets">
                    <!--MINI-PROJETS-->
                    <div class="projet">
                        <a href="mini-projets.html#mini-projects">
                            <div class="picture">
                                <img src="pictures/mini-projet.jpg" alt="Mes mini-projets">
                            </div>
                            <span>Mini-projets</span>
                            <span class="date-project"> 10/05/2021</span>
                        </a>
                    </div>
                    <!--BOOTSTRAP-PROJECTS-->
                    <div class="projet">
                        <a href="bootstrap-projects.html#bootstrap">
                            <div class="picture">
                                <img src="pictures/evaluation.jpg" alt="Mes projets Bootstrap">
                            </div>
                            <span>Projets Bootstrap</span>
                            <span class="date-project"> 20/06/2021</span>
                        </a>
                    </div>
                    <!--JAVASCRIPT-PROJECTS-->
                    <div class="projet">
                        <a href="javascript-projects.html#javascript">
                            <div class="picture">
                                <img src="pictures/javascript-projects.jpg" alt="Mes projets Javascript">
                            </div>
                            <span>Projets Javascript</span>
                            <span class="date-project"> 17/07/2021</span>
                        </a>
                    </div>
                </div>
            </section>

            <!--CONTACT-->
            <section>
                <h3>Contact</h3>
                <div id="contact">
                    <p>Si vous souhaitez me contacter, n'hésitez pas à m'envoyer un mail à <a href="mailto:#"><b> manonbayer.pro@gmail.com</b></a>.</p>
                </div>
            </section>
        </div>

        <!-- FOOTER INCLUDE -->
        <?php include('design/footer.php'); ?>
    </body>
</html>