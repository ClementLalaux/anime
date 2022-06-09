<?php require('./templates/header.php');


require "./db/db.php";

$tournoi_nom = "tournoi_naruto";

$personnages = $conn->query("SELECT * FROM $tournoi_nom ")->fetchAll(); 

$tableau_du_tournoi = [];

foreach ($personnages as $p){
    array_push($tableau_du_tournoi,$p);
}

?>

<div class="container">
    <div class="row pt-5" id="section_round_1">
    
        <h1 class="text-center">Round 1</h1>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_1" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_1"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_1" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_1"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_2" class="section_round_2" style="display:none;">
    
        <h1 class="text-center">Round 2</h1>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_2" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_2"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_2_manche_2" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_2_manche_2"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_3" class="section_round_3" style="display:none;">
    
        <h1 class="text-center">Round 3</h1>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p2" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p4" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p3"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_2" class="section_round_4" style="display:none;">
    
        <h1 class="text-center">Round 2</h1>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p2" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p4" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p3"></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5" id="section_round_2" class="section_round_5" style="display:none;">
    
        <h1 class="text-center">Round 2</h1>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p2" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="p4" src="" class="card-img-top" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="p3"></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Mes variables
    let t;
    let t_final = [];
    let tableau_round_2 = [];
    let tableau_round_3 = [];
    let i = 0;

function transformationTableauPhpJavascript(){
    var tableau_transformation = "<?php foreach($tableau_du_tournoi as $t){echo($t['idtournoi_naruto'].",".$t['nom']).",".$t['nombre_combat'].','.$t['nombre_victoire'].','.$t['img'].';';} ?>";
    tableau_js = tableau_transformation.split(";");
    for(let t2 of tableau_js){
        t2 = t2.split(",");
        t_final.push(t2);
    }
    stringToInt(t_final);
}

// Transforme les strings du tableau en int
function stringToInt(tableau){
    for(let t of tableau){
        t[2] = parseInt(t[2]);
        t[3] = parseInt(t[3]);        
    }
}

function affiche_round1(){
    document.getElementById('titre_participant_1_manche_1').innerText = t_final[i][1];
    document.getElementById('image_participant_1_manche_1').setAttribute("src",t_final[i][4]);
    document.getElementById('image_participant_1_manche_1').setAttribute("data-id",t_final[i][0]);
    document.getElementById('titre_participant_2_manche_1').innerText = t_final[i+1][1];
    document.getElementById('image_participant_2_manche_1').setAttribute("src",t_final[i+1][4]);
    document.getElementById('image_participant_2_manche_1').setAttribute("data-id",t_final[i+1][0]);
}

function affiche_round2(){
    document.getElementById('titre_participant_1_manche_2').innerText = tableau_round_2[i][1];
    document.getElementById('image_participant_1_manche_2').setAttribute("src",tableau_round_2[i][4]);
    document.getElementById('image_participant_1_manche_2').setAttribute("data-id",tableau_round_2[i][0]);
    document.getElementById('titre_participant_2_manche_2').innerText = tableau_round_2[i+1][1];
    document.getElementById('image_participant_2_manche_2').setAttribute("src",tableau_round_2[i+1][4]);
    document.getElementById('image_participant_2_manche_2').setAttribute("data-id",tableau_round_2[i+1][0]);
}

transformationTableauPhpJavascript();
affiche_round1();


$(document).ready(function (){
    $('#image_participant_1_manche_1').click(function(){
        tableau_round_2.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[event.target.dataset.id][2] += 1;
    })
    
    $('#image_participant_1_manche_1').click(function(){
        if(i<30){
            i = i + 2;
            affiche_round1();
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex";
            i=0;
            affiche_round2();
            
        }
    });
    $('#image_participant_2_manche_1').click(function(){
        tableau_round_2.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[event.target.dataset.id-2][2] += 1;

    })
    
    $('#image_participant_2_manche_1').click(function(){
        if(i<30){
            i = i + 2;
            affiche_round1();
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex"; 
            i=0; 
            affiche_round2();
            
        }
    });
})

$(document).ready(function (){
    $('#image_participant_1_manche_2').click(function(){
        tableau_round_3.push(tableau_round_2[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[event.target.dataset.id][2] += 1;
        
    });

    $('#image_participant_1_manche_2').click(function(){
        if(i<14){
            i = i + 2;
            affiche_round2();
        } else {
            document.getElementById("section_round_2").style.display = "none";
            document.getElementById("section_round_3").style.display = "flex";
            i=0;
            affiche_round3();     
        }
    })

    $('#image_participant_2_manche_2').click(function(){
        tableau_round_3.push(tableau_round_2[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[event.target.dataset.id-2][2] += 1;
        
    });
})


</script>

<?php require('./templates/footer.php'); ?>