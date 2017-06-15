<?php
session_start();
/*Her er de forskellige variabler som skal indholde information*/
$heading = $_GET['heading'];
$imgSrc = $_GET['imgSrc'];
$imgAlt = $_GET['imgAlt'];
$articleText = $_GET['articleText'];
$time = date("Y-m-d");
$username = $_SESSION['username'];

/*Så kan dataen komme ind i vores database*/
require_once "connect.php";
/*Her for de forskellige variabler en værdig som brugeren indtaster på hjemmesiden*/
$statement = $DBH->prepare("INSERT INTO articles (imgSrc, imgAlt, heading, time, articleText, username) values(?, ?, ?, ?, ?, ?) ");
/*Her kan man se hvilket spørgsmåltegn hver variabel udgør. Spørgsmålstegn 1 er f.eks. $imgSrc*/
$statement->bindParam(1, $imgSrc);
$statement->bindParam(2, $imgAlt);
$statement->bindParam(3, $heading);
$statement->bindParam(4, $time);
$statement->bindParam(5, $articleText);
$statement->bindParam(6, $username);
/*Her bliver koden udført når informationerne er indtastet*/
$statement->execute();

/*Dette gør at vi opdatere forsiden, så vi kan se den nye artikel*/
header("location: index.php");
?>