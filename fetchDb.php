<?php
/*Her henter vi connect.php*/
require_once "connect.php";

//Vælg alt fra post tabellen
$statement = $DBH->prepare("SELECT * FROM post");
/*Udføre koden*/
$statement->execute();
/*Her bliver artiklen lavet udfra de informationer som databasen har modtaget fra brugeren*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
        <h1><?php echo $row['heading'] ?></h1> <img src="IMG/<?php echo $row['imgSrc'] ?>.jpg" alt="<?php echo $row['imgAlt'] ?>">
        <div class="afsender">
            <p>Skrevet af</p>
            <p>Den</p>
        </div>
        <div class="time">
            <p>
                <?php echo $row['time'] ?>
            </p>
        </div>
        <p>
            <?php echo $row['articleText'] ?>
        </p>
    </article>
    <?php
}
?>