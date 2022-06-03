<?php require('./templates/header.php');


require "./db/db.php";



$personnage = $conn->query("SELECT * FROM tournoi_naruto ")->fetchAll(); 

$tableau = [];
$tableau2 = [];
foreach ($personnage as $p){
    array_push($tableau,$p);
}

?>

<div class="container">
<div class="row pt-5">
    <h1 class="text-center">Round 1</h1>
    <div class="col-6 p-3 text-center">
        <div class="card" style="width: 18rem;">
            <img id="img1" src="<?= $tableau[0]['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $tableau[0]['nom']?></h5>
            </div>
        </div>
    </div>
    <div class="col-6 p-3 text-center">
        <div class="card" style="width: 18rem;">
            <img id="img2" src="<?= $tableau[1]['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $tableau[1]['nom']?></h5>
            </div>
        </div>
    </div>
</div>
</div>
<script>

<?php require('./templates/footer.php'); ?>