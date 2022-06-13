<?php require('./templates/header.php');


require "./db/db.php";

$tournoi_nom = "participants_naruto";

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
                <input type="image" id="image_participant_1_manche_1" src="" class="card-img-top participant_1_manche_1" data-id="" ></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_1"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
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
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_2" src="" class="card-img-top participant_1_manche_2" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_2"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
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
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_3" src="" class="card-img-top participant_1_manche_3" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_3"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
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
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_4" src="" class="card-img-top participant_1_manche_4" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_4"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
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
        <div class="col-6 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_1_manche_5" src="" class="card-img-top participant_1_manche_5" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_1_manche_5"></h5>
                </div>
            </div>
        </div>
        <div class="col-6 p-3 text-center">
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
        <div class="col-12 p-3 text-center">
            <div class="card" style="width: 18rem;">
                <input type="image" id="image_participant_gagnant" src="" class="card-img-top participant_gagnant" data-id=""></input>
                <div class="card-body">
                    <h5 class="card-title" id="titre_participant_gagnant"></h5>
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
    let tableau_round_4 = [];
    let tableau_round_5 = [];
    let tableau_round_6 = [];
    let i = 0;

// Function qui récupère un tournoi de la bdd (php) et que l'incorpore dans un tableau js

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

// Affichage round

function affiche_round(numero){
    document.getElementById('titre_participant_1_manche_'+numero).innerText = t_final[i][1];
    document.getElementById('image_participant_1_manche_'+numero).setAttribute("src",t_final[i][4]);
    document.getElementById('image_participant_1_manche_'+numero).setAttribute("data-id",t_final[i][0]);
    document.getElementById('titre_participant_2_manche_'+numero).innerText = t_final[i+1][1];
    document.getElementById('image_participant_2_manche_'+numero).setAttribute("src",t_final[i+1][4]);
    document.getElementById('image_participant_2_manche_'+numero).setAttribute("data-id",t_final[i+1][0]);
}


function affiche_gagnant(){
    document.getElementById('titre_participant_gagnant').innerText = tableau_round_6[0][1];
    document.getElementById('image_participant_gagnant').setAttribute("src",tableau_round_6[0][4]);
    document.getElementById('image_participant_gagnant').setAttribute("data-id",tableau_round_6[0][0]);
    
}



transformationTableauPhpJavascript();
affiche_round(1);


// Fonction click round 1

$(document).ready(function (){
    $('#image_participant_1_manche_1').click(function(){
        tableau_round_2.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_2_manche_1')[0].dataset.id-1][2] += 1;
    })
    
    $('#image_participant_1_manche_1').click(function(){
        if(i<30){
            i = i + 2;
            affiche_round(1);
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex";
            i=0;
            affiche_round(2);
            
        }
    });
    $('#image_participant_2_manche_1').click(function(){
        tableau_round_2.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_1_manche_1')[0].dataset.id-1][2] += 1;

    });
    
    $('#image_participant_2_manche_1').click(function(){
        if(i<30){
            i = i + 2;
            affiche_round(1);
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex"; 
            i=0; 
            affiche_round(2);
            
        }
    });
})

// Fonction click round 2

$(document).ready(function (){
    $('#image_participant_1_manche_2').click(function(){
        tableau_round_3.push(t_final[event.target.dataset.id-1]); 
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_2_manche_2')[0].dataset.id-1][2] += 1;
        
    });

    $('#image_participant_1_manche_2').click(function(){
        if(i<14){
            i = i + 2;
            affiche_round(2);
        } else {
            document.getElementById("section_round_2").style.display = "none";
            document.getElementById("section_round_3").style.display = "flex";
            i=0;
            affiche_round(3);     
        }
    })

    $('#image_participant_2_manche_2').click(function(){
        tableau_round_3.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_1_manche_2')[0].dataset.id-1][2] += 1;
        
    });

    $('#image_participant_2_manche_2').click(function(){
        if(i<14){
            i = i + 2;
            affiche_round(2);
        } else {
            document.getElementById("section_round_2").style.display = "none";
            document.getElementById("section_round_3").style.display = "flex"; 
            i=0; 
            affiche_round(3);
            
        }
    });
})

// Fonction click round 3

$(document).ready(function (){
    $('#image_participant_1_manche_3').click(function(){
        tableau_round_4.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_2_manche_3')[0].dataset.id-1][2] += 1;
        
    });

    $('#image_participant_1_manche_3').click(function(){
        if(i<6){
            i = i + 2;
            affiche_round(3);
        } else {
            document.getElementById("section_round_3").style.display = "none";
            document.getElementById("section_round_4").style.display = "flex";
            i=0;
            affiche_round(4);     
        }
    })

    $('#image_participant_2_manche_3').click(function(){
        tableau_round_4.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_1_manche_3')[0].dataset.id-1][2] += 1;
    });

    $('#image_participant_2_manche_3').click(function(){
        if(i<6){
            i = i + 2;
            affiche_round(3);
        } else {
            document.getElementById("section_round_3").style.display = "none";
            document.getElementById("section_round_4").style.display = "flex"; 
            i=0; 
            affiche_round(4);
            
        }
    });
})

// Fonction click round 4

$(document).ready(function (){
    $('#image_participant_1_manche_4').click(function(){
        tableau_round_5.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_2_manche_4')[0].dataset.id-1][2] += 1;
        
    });

    $('#image_participant_1_manche_4').click(function(){
        if(i<2){
            i = i + 2;
            affiche_round(4);
        } else {
            document.getElementById("section_round_4").style.display = "none";
            document.getElementById("section_round_5").style.display = "flex";
            i=0;
            affiche_round(5);     
        }
    })

    $('#image_participant_2_manche_4').click(function(){
        tableau_round_5.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_1_manche_4')[0].dataset.id-1][2] += 1;
    });

    $('#image_participant_2_manche_4').click(function(){
        if(i<2){
            i = i + 2;
            affiche_round(4);
        } else {
            document.getElementById("section_round_4").style.display = "none";
            document.getElementById("section_round_5").style.display = "flex"; 
            i=0; 
            affiche_round(5);
            
        }
    });
})

// Fonction click round 5 (finale)

$(document).ready(function (){
    $('#image_participant_1_manche_5').click(function(){
        tableau_round_6.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_2_manche_5')[0].dataset.id-1][2] += 1;

        
    });

    $('#image_participant_1_manche_5').click(function(){
        if(i<0){
            i = i + 2;
            affiche_round(5);
        } else {
            document.getElementById("section_round_5").style.display = "none";
            document.getElementById("section_gagnant").style.display = "flex";
            i=0;
            affiche_gagnant();
            t_final.pop();  
            console.log(t_final)
        }
    })

    $('#image_participant_2_manche_5').click(function(){
        tableau_round_6.push(t_final[event.target.dataset.id-1]);
        t_final[event.target.dataset.id-1][2] += 1;
        t_final[event.target.dataset.id-1][3] += 1;
        t_final[document.getElementsByClassName('participant_1_manche_5')[0].dataset.id-1][2] += 1;
    });

    $('#image_participant_2_manche_5').click(function(){
        if(i<0){
            i = i + 2;
            affiche_round(5);
        } else {
            document.getElementById("section_round_5").style.display = "none";
            document.getElementById("section_gagnant").style.display = "flex"; 
            i=0; 
            affiche_gagnant();
            t_final.pop();   
        }
    });
})

</script>

<?php require('./templates/footer.php'); ?>