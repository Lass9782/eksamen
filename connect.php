<?php 

/*Her er de oplysinger der skal til for at der forbindelse til databasen*/
/*Oplysningerne er pakket ind i hver deres variabler*/
$host = "localhost";
$dbName = "wildnessdb";
$dbUsername = "root";
$dbPassword = "";

/*Her opretter jeg forbindelse til min database ved hjælp af klassen PDO*/
/*PDO står for PHP Data Obejkt*/
try{
$DBH = new PDO("mysql:dbname=$dbName;host=$host;charset=utf8", $dbUsername, $dbPassword );
/*Hvis der sker en fejl bliver den udskrevet her*/
/* -> betyder at jeg vil anvende en metode der høre til DBH*/
$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo"Noget gik galt: <br>";
    echo $e->getMessage( );
}
?>