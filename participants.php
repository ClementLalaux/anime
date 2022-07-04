<?php require('./templates/header.php');



require "./db/db.php";

$id = $_GET['id'];

$personnages = $conn->query("SELECT * FROM participants WHERE liste_tournois_idliste_tournois = $id")->fetchAll(); 

$tableau_du_tournoi = [];

foreach ($personnages as $p){
    array_push($tableau_du_tournoi,$p);
}

?>

<div class="container">
    <div class="row pt-5"  id="section_round_1">
        <h1 class="text-center pb-5 mb-5">Round 1</h1>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_1" src="" class="card-img-top participant_1_manche_1" data-id="" ></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_1"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_1" src="" class="card-img-top participant_2_manche_1" data-id="" ></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_1"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_2" class="section_round_2" style="display:none;">
    
        <h1 class="text-center">Round 2</h1>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_2" src="" class="card-img-top participant_1_manche_2" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_2"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_2" src="" class="card-img-top participant_2_manche_2" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_2"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_3" class="section_round_3" style="display:none;">
    
        <h1 class="text-center">Round 3</h1>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_3" src="" class="card-img-top participant_1_manche_3" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_3"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_3" src="" class="card-img-top participant_2_manche_3" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_3"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_4" class="section_round_4" style="display:none;">
    
        <h1 class="text-center">Demi-finale</h1>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_4" src="" class="card-img-top participant_1_manche_4" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_4"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_4" src="" class="card-img-top participant_2_manche_4" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_4"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_5" class="section_round_5" style="display:none;">
    
        <h1 class="text-center">Finale</h1>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_5" src="" class="card-img-top participant_1_manche_5" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_5"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_5" src="" class="card-img-top participant_2_manche_5" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_5"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_gagnant" class="section_gagnant" style="display:none;">
    
        <h1 class="text-center">Grand gagnant</h1>
        <div class="col-12 p-3 text-center d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_gagnant" src="" class="card-img-top participant_gagnant" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_gagnant"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <h3 class="text-center pb-5">
            Arbre de tournoi
        </h3>
        <div id="tree">
            <div class="level">
                <div class="item">
                    <p class="arbre_round_1"> 1 VS 2</p>
                    <p class="arbre_round_1"> 3 VS 4</p>
                    <p class="arbre_round_1"> 5 VS 6</p>
                    <p class="arbre_round_1"> 7 VS 8</p>
                    <p class="arbre_round_1"> 9 VS 10</p>
                    <p class="arbre_round_1"> 11 VS 12</p>
                    <p class="arbre_round_1"> 13 VS 14</p>
                    <p class="arbre_round_1"> 15 VS 16</p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_3"> </p>
                    <p class="arbre_round_3"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_4"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_5"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_4"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_3"> </p>
                    <p class="arbre_round_3"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                    <p class="arbre_round_2"> </p>
                </div>
            </div>
            <div class="level">
                <div class="item">
                    <p class="arbre_round_1"> 1 VS 2</p>
                    <p class="arbre_round_1"> 3 VS 4</p>
                    <p class="arbre_round_1"> 5 VS 6</p>
                    <p class="arbre_round_1"> 7 VS 8</p>
                    <p class="arbre_round_1"> 9 VS 10</p>
                    <p class="arbre_round_1"> 11 VS 12</p>
                    <p class="arbre_round_1"> 13 VS 14</p>
                    <p class="arbre_round_1"> 15 VS 16</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

// Function qui récupère un tournoi de la bdd (php) et que l'incorpore dans un tableau js

function transformationTableauPhpJavascript(){
    var tableau_transformation = "<?php foreach($tableau_du_tournoi as $t){echo($t['idparticipants'].",".$t['nom']).",".$t['nombre_combat'].','.$t['nombre_victoire'].','.$t['img'].','.$t['liste_tournois_idliste_tournois'].';';} ?>";
    tableau_js = tableau_transformation.split(";");
    for(let t2 of tableau_js){
        t2 = t2.split(",");
        t_final.push(t2);
    }
    stringToInt(t_final);
}



</script>
<script src='js/participants.js'></script>

<?php require('./templates/footer.php'); ?>