<?php


require "./db.php";

global $conn;

$conn->query("INSERT INTO liste_tournois (img,description) VALUES ('assets/img/naruto.jpg','Tournois des meilleurs personnages de Naruto')");


require('../templates/footer.php'); ?>