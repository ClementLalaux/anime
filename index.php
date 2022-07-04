<?php require('./templates/header.php');


require "./db/db.php";

global $conn;

$tournois = $conn->query("SELECT * FROM liste_tournois")->fetchAll();

?>
<div class="container">
    <div class="row text-center ">
        <h1 class="mb-5">
            Tournament
        </h1>
        <?php foreach($tournois as $t){?>
        <div class="col-3">
            <div class="card text-center" style="width: 18rem;">
                <h5 class="card-title text-center pt-3 pb-3"><?= $t['description']; ?></h5>
                <img src="<?= $t['img'];?>" class="card-img-top" alt="...">
                <div class="card-body pt-4 pb-4">
                    <a href="participants.php?id=<?= $t['idliste_tournois'];?>" class="btn btn-dark">Faire le Tournoi</a>
                </div>
            </div>
        </div>
        <?php } ?>
        
    </div>
</div>


<?php require('./templates/footer.php'); ?>