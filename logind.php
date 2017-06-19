<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Mit stylesheet -->
        <link rel="stylesheet" href="CSS/logind.css">
        <title>Log ind</title>
    </head>

    <body>
        <!-- En wrapper til indholdet -->
        <div class="wrapper">
            <!-- Header med logo og menu -->
            <header> <img src="IMG/header_img.jpg" alt="logo">
                <nav>
                    <ul id="ul1">
                        <!-- Den grå kasse om menupunktet -->
                        <li class="li1"> <a href="index.php">HOME</a> </li>
                        <li class="li1"> <a href="">Planter</a></li>
                        <li class="li1"> <a href="">Indretning</a> </li>
                    </ul>
                    <!-- Log ind menupunkt -->
                    <ul id="logind">
                        <div class="gray">
                            <li><a href="logind.php">Log ind</a></li>
                    </ul>
                    </div>
                </nav>
            </header>
            <!-- Main med log ind -->
            <main>
                <form action="checkUser.php" method="post">
                    <label for="formUsername">Brugernavn</label>
                    <input type="text" id="user" placeholder="Indtast dit brugernavn" name="formUsername">
                    <label for="formPassword">Password</label>
                    <input type="text" id="pass" placeholder="Indtast dit password" name="formPassword">
                    <input type="submit" value="Log ind"> </form>
            </main>
            <footer> © 2017 - Wilderness</footer>
        </div>
    </body>

    </html>