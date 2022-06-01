<?php require('./templates/header.php');


require "./db/db.php";


$personnage = $conn->query("SELECT * FROM tournoi_naruto")->fetchAll(); 
var_dump($personnage);

foreach ($personnage as $p){ ?>

    <h2>
        <?= $p['nom']; ?>
    </h2>

<?php } ?>

<?php require('./templates/footer.php'); ?>