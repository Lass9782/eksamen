<?php
/*Her er de variabler som indeholder de infomationer som brugeren indtaster*/
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

/*Så har vi forbindelse til databasen*/
require_once "connect.php";
/*Så kigger den alle brugerne igennem for at se om $formUsername matcher med oplysninger i databasen*/
$statement = $DBH->prepare("SELECT * FROM users WHERE dbUsername=?");
$statement->bindParam(1, $formUsername);
$statement->execute();

/*Her blive der lavet et array som indeholder alle de brugere der passer med det indtastede brugernavn*/
/*Her bruger jeg en fetchAll metode. Den hiver alle rækkerne ud fra $statement og lager dem i $rows*/
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
/*Hvis der et forkert brugernavn der bliver indtastet kommer denne besked frem.*/
/*Bagefter bliver man sendt tilbage til forsiden*/
if(empty($rows)){
    echo"Kan ikke finde bruger!";
    header("Refresh:3 url=index.php");
}else{
    /*Nu kører jeg et loop som tjekker om dbPassword matcher formPassword til det brugernavn som er indtastet*/
    foreach($rows as $row){
        if($row['dbPassword'] == $formPassword){
            /*Sørg for at brugeren er logget ind og har tilladelser*/
            session_start();
            $_SESSION['username'] = $formUsername;
            header("location: index.php");
        }
    }
    /*Hvis Passwordet ikke matcher sker det her*/
    echo "Ikke korrekt password!";
    header("Refresh:3; url=index.php");
}
$DBH = null;
?>