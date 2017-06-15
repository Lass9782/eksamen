<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Mit stylesheet -->
        <link rel="stylesheet" href="CSS/style.css">
        <!-- Font-aesome stylesheet til ikoner -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Wilderness Blog forside</title>
    </head>

    <body>
        <!-- En wrapper til indholdet -->
        <div class="wrapper">
            <!-- Header med logo og menu -->
            <header> <img src="IMG/header_img.jpg" alt="logo">
                <nav>
                    <ul>
                        <!-- Den grå kasse om menupunktet -->
                        <div class="gray">
                            <li class="li1"> <a href="index.php">HOME</a> </li>
                        </div>
                        <li class="li1"> <a href="">Planter</a></li>
                        <li class="li1"> <a href="">Indretning</a> </li>
                    </ul>
                    <!-- Log ind menupunkt -->
                    <ul id="logind">
                        <li><a href="logind.php">Log ind</a></li>
                    </ul>
                </nav>
            </header>
            <!-- Main med aside og artikler -->
            <main>
                <!-- Aside med billede, tekst og fire font-awesome ikoner -->
                <aside><img src="IMG/frk_overspringshandling.png" alt="Line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi iusto laboriosam, repellat vitae dolor in. Dolorem sint consequuntur eaque, modi numquam possimus? Placeat optio debitis enim explicabo ab nihil. Magnam.</p> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> <i class="fa fa-flickr fa-2x" aria-hidden="true"></i> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i> </aside>
                <!-- Min post class hvor mine artikler befinder sig i -->
                <div class="post">
                    <article>
                        <h1>Vores nye lænestol i egetræ og kerneleder</h1> <img src="IMG/l%C3%A6nestol.jpg" alt="lænestol">
                        <!-- Afsender class som beskriver hvem der har lavet artiklen -->
                        <div class="afsender">
                            <p>Skrevet af</p> Line
                            <p>Den</p>
                        </div>
                        <!-- Time class som fortæller hvornår den er uploadet -->
                        <div class="time">24. August, 2017</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam autem fugiat iste eius perferendis omnis voluptate rerum cum cupiditate. Nisi quia saepe ipsa, reiciendis similique odio itaque, non officiis tempore!</p>
                    </article>
                    <!-- Her inkluderer jeg fetchDb -->
                    <?php include "fetchDb.php";?>
                </div>
            </main>
            <footer> © 2017 - Wilderness</footer>
        </div>
    </body>

    </html>