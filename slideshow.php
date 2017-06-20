<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Slideshow</title>
        <!--Stylesheet til selve slideshowet-->
        <link rel="stylesheet" href="CSS/slider.css">
        <!--Stylesheet til siden-->
        <link rel="stylesheet" href="CSS/slideshow.css"> </head>

    <body>
        <!-- En wrapper til indholdet -->
        <div class="wrapper">
            <!-- Header med logo og menu -->
            <header> <img src="IMG/header_img.jpg" alt="logo">
                <nav>
                    <ul id="ul1">
                        <li class="li1"> <a href="index.php">HOME</a> </li>
                        <li class="li1"> <a href="">Planter</a></li>
                        <li class="li1"> <a href="slideshow.html">Indretning</a> </li>
                        <!-- Den grå kasse om menupunktet -->
                        <div class="gray">
                            <li class="li1"> <a href="slideshow.php">Slideshow</a> </li>
                        </div>
                    </ul>
                    <!-- Log ind menupunkt når man er logget ind -->
                    <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                        <h4>Hej
                            <?php echo $_SESSION['username'];  ?> , 
                       
                            <a href="logout.php?logout=true">Log ud</a>
                            </h4>
                        <?php        
                    } else{
                    ?>
                            <!-- Log ind menupunkt når man ikke er logget ind -->
                            <ul id="logind">
                                <li><a href="logind.php">Log ind</a></li>
                            </ul>
                            <?php } ?>
                </nav>
            </header>
            <!-- Main med slideshow -->
            <main>
                <div class="fadein"> <img src="IMG/slideshow-1.png" alt="det første slideshow billede"> <img src="IMG/slideshow-2.jpg" alt="det andet slideshow billede"> <img src="IMG/slideshow-3.png" alt="det tredje slideshow billede"> <img src="IMG/slideshow-4.png" alt="det fjerde slideshow billede"></div>
            </main>
            <footer> © 2017 - Wilderness</footer>
        </div>
        <!-- Det nyeste jquery script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!--Mit slideshow script-->
        <script src="JS/slideshow.js"></script>
    </body>

    </html>