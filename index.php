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
                    <!-- Log ind menupunkt når man ikke er logget ind -->
                    <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                        <h4>Hej
                            <?php echo $_SESSION['username'];  ?> , 
                       
                            <a href="logout.php?logout=true">Log ud</a>
                            </h4>
                        <?php        
                    } else{
                    ?>
                            <!-- Log ind menupunkt når man er logget ind -->
                            <ul id="logind">
                                <li><a href="logind.php">Log ind</a></li>
                            </ul>
                            <?php } ?>
                </nav>
            </header>
            <!-- Main med aside og artikler -->
            <main>
                <!-- Aside med billede, tekst og fire font-awesome ikoner -->
                <aside><img src="IMG/frk_overspringshandling.png" alt="Line">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi iusto laboriosam, repellat vitae dolor in. Dolorem sint consequuntur eaque, modi numquam possimus? Placeat optio debitis enim explicabo ab nihil. Magnam.</p> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> <i class="fa fa-flickr fa-2x" aria-hidden="true"></i> <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i> </aside>
                <?php 
                    if(isset($_SESSION ['username']) && !empty($_SESSION['username'])){ ?>
                    <!-- Min post class med artikler hvis brugeren er logget ind -->
                    <div class="post">
                        <!-- Her kan man indsætte et nyt indlæg -->
                        <form action="insert.php" method="get">
                            <div class="form-group">
                                <h1>Opret et nyt indlæg</h1> </div>
                            <div class="form-group">
                                <label for="heading">Titel</label>
                                <br>
                                <input id="heading" type="text" name="heading" placeholder="Titel på dit indlæg"> </div>
                            <div class="form-group">
                                <label for="imgSrc">Billede navn</label>
                                <br>
                                <input id="imgSrc" type="text" name="imgSrc" placeholder="Navn på billede uden jpg."> </div>
                            <div class="form-group">
                                <label for="imgAlt">Billede alt tekst</label>
                                <br>
                                <input id="imgAlt" type="text" name="imgAlt" placeholder="Billedets alt tekst"> </div>
                            <div class="form-group">
                                <label for="articleText" name="articleText" placeholder="Tekst">Indlæggets tekst</label>
                                <br>
                                <textarea id="articleText" type="text" name="articleText" placeholder="Indlæggets tekst"> </textarea>
                            </div>
                            <input type="submit" value="Udgiv indlæg"> </form>
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
                    <?php        
                    } else{
                    ?>
                        <!-- Min post class hvor mine artikler befinder sig i hvis man ikke er logget ind -->
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
                        <?php } ?>
            </main>
            <footer> © 2017 - Wilderness</footer>
        </div>
    </body>

    </html>