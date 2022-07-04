    // Mes variables
    let t;
    let t_final = [];
    let tableau_round_2 = [];
    let tableau_round_3 = [];
    let tableau_round_4 = [];
    let tableau_round_5 = [];
    let tableau_round_6 = [];
    let k = 0;





// Transforme les strings du tableau en int

function stringToInt(tableau){
    for(let t of tableau){
        t[2] = parseInt(t[2]);
        t[3] = parseInt(t[3]);
    }
}

function ajouteRound1Arbre(round,tableau){
    let arbre = document.getElementsByClassName('arbre_round_'+round);
    let i = 0;
    for(const a of arbre){
        a.innerHTML = tableau[i][1]+"<br/> VS <br/>"+tableau[i+1][1];
        i=i+2;
    }

}


// Affichage round

function affiche_round(numero,tableau){
    document.getElementById('titre_participant_1_manche_'+numero).innerText = tableau[k][1];
    document.getElementById('image_participant_1_manche_'+numero).setAttribute("src",tableau[k][4]);
    document.getElementById('image_participant_1_manche_'+numero).setAttribute("data-id",tableau[k][0]);
    document.getElementById('titre_participant_2_manche_'+numero).innerText = tableau[k+1][1];
    document.getElementById('image_participant_2_manche_'+numero).setAttribute("src",tableau[k+1][4]);
    document.getElementById('image_participant_2_manche_'+numero).setAttribute("data-id",tableau[k+1][0]);
}


function affiche_gagnant(){
    document.getElementById('titre_participant_gagnant').innerText = tableau_round_6[0][1];
    document.getElementById('image_participant_gagnant').setAttribute("src",tableau_round_6[0][4]);
    document.getElementById('image_participant_gagnant').setAttribute("data-id",tableau_round_6[0][0]);
    
}

transformationTableauPhpJavascript();

t_final.pop();
ajouteRound1Arbre(1,t_final);

function randomize(tab) {
    var x, y, tmp;
    for (x = tab.length - 1; x > 0; x--) {
        y = Math.floor(Math.random() * (x + 1));
        tmp = tab[x];
        tab[x] = tab[y];
        tab[y] = tmp;
    }
    return tab;
}

randomize(t_final);

affiche_round(1,t_final);


// Fonction click round 1

$(document).ready(function (){
    $('#image_participant_1_manche_1').click(function(){
        tableau_round_2.push(t_final[k]);
        t_final[k][2] += 1; 
        t_final[k][3] += 1;
        t_final[k+1][2] += 1;
    })
    
    $('#image_participant_1_manche_1').click(function(){
        if(k<30){
            k = k + 2;
            affiche_round(1,t_final);
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex";
            k=0;
            affiche_round(2,tableau_round_2);
            ajouteRound1Arbre(2,tableau_round_2); 
        }
    });
    $('#image_participant_2_manche_1').click(function(){
        tableau_round_2.push(t_final[k+1]);
        t_final[k+1][2] += 1;
        t_final[k+1][3] += 1;
        t_final[k][2] += 1;

    });
    
    $('#image_participant_2_manche_1').click(function(){
        if(k<30){
            k= k + 2;
            affiche_round(1,t_final);
        } else {
            document.getElementById("section_round_1").style.display = "none";
            document.getElementById("section_round_2").style.display = "flex"; 
            k=0;
            affiche_round(2,tableau_round_2);
            ajouteRound1Arbre(2,tableau_round_2); 
        }
    });
})

// Fonction click round 2

$(document).ready(function (){
    $('#image_participant_1_manche_2').click(function(){
        tableau_round_3.push(tableau_round_2[k]);
        t_final.forEach(e => {
            if(e==tableau_round_2[k]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_2_manche_2')[0].dataset.id){
                e[2] += 1;
            }
        })
        
    });

    $('#image_participant_1_manche_2').click(function(){
        if(k<14){
            k=k+2;
            affiche_round(2,tableau_round_2);
        } else {
            document.getElementById("section_round_2").style.display = "none";
            document.getElementById("section_round_3").style.display = "flex";
            k=0;
            affiche_round(3,tableau_round_3);
            ajouteRound1Arbre(3,tableau_round_3); 
        }
    })

    $('#image_participant_2_manche_2').click(function(){
        tableau_round_3.push(tableau_round_2[k+1]);
        t_final.forEach(e => {
            if(e==tableau_round_2[k+1]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_1_manche_2')[0].dataset.id){
                e[2] +=1;
            }
        })       
    });

    $('#image_participant_2_manche_2').click(function(){
        if(k<14){
            k= k + 2;
            affiche_round(2,tableau_round_2);
        } else {
            document.getElementById("section_round_2").style.display = "none";
            document.getElementById("section_round_3").style.display = "flex"; 
            k=0;
            affiche_round(3,tableau_round_3);
            ajouteRound1Arbre(3,tableau_round_3);      
        }
    });
})

// Fonction click round 3

$(document).ready(function (){
    $('#image_participant_1_manche_3').click(function(){
        tableau_round_4.push(tableau_round_3[k]);
        t_final.forEach(e => {
            if(e==tableau_round_3[k]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_2_manche_3')[0].dataset.id){
                e[2] += 1;
            }
        })
        
    });

    $('#image_participant_1_manche_3').click(function(){
        if(k<6){
            k=k+2;
            affiche_round(3,tableau_round_3);
        } else {
            document.getElementById("section_round_3").style.display = "none";
            document.getElementById("section_round_4").style.display = "flex";
            k=0;
            affiche_round(4,tableau_round_4);
            ajouteRound1Arbre(4,tableau_round_4); 
        }
    })

    $('#image_participant_2_manche_3').click(function(){
        tableau_round_4.push(tableau_round_3[k+1]);
        t_final.forEach(e => {
            if(e==tableau_round_3[k+1]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_1_manche_3')[0].dataset.id){
                e[2] +=1;
            }
        })       
    });

    $('#image_participant_2_manche_3').click(function(){
        if(k<6){
            k= k + 2;
            affiche_round(3,tableau_round_3);
        } else {
            document.getElementById("section_round_3").style.display = "none";
            document.getElementById("section_round_4").style.display = "flex"; 
            k=0;
            affiche_round(4,tableau_round_4);   
            ajouteRound1Arbre(4,tableau_round_4);   
        }
    });
})



// Fonction click round 4

$(document).ready(function (){
    $('#image_participant_1_manche_4').click(function(){
        tableau_round_5.push(tableau_round_4[k]);
        t_final.forEach(e => {
            if(e==tableau_round_4[k]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_2_manche_4')[0].dataset.id){
                e[2] += 1;
            }
        })
        
    });

    $('#image_participant_1_manche_4').click(function(){
        if(k<2){
            k=k+2;
            affiche_round(4,tableau_round_4);
        } else {
            document.getElementById("section_round_4").style.display = "none";
            document.getElementById("section_round_5").style.display = "flex";
            k=0;
            affiche_round(5,tableau_round_5);
            ajouteRound1Arbre(5,tableau_round_5); 
        }
    })

    $('#image_participant_2_manche_4').click(function(){
        tableau_round_5.push(tableau_round_4[k+1]);
        t_final.forEach(e => {
            if(e==tableau_round_4[k+1]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_1_manche_4')[0].dataset.id){
                e[2] +=1;
            }
        })       
    });

    $('#image_participant_2_manche_4').click(function(){
        if(k<2){
            k= k + 2;
            affiche_round(4,tableau_round_4);
        } else {
            document.getElementById("section_round_4").style.display = "none";
            document.getElementById("section_round_5").style.display = "flex"; 
            k=0;
            affiche_round(5,tableau_round_5); 
            ajouteRound1Arbre(5,tableau_round_5);     
        }
    });
})

// Fonction click round 5 (finale)



$(document).ready(function (){
    $('#image_participant_1_manche_5').click(function(){
        
        tableau_round_6.push(tableau_round_5[k]);
        t_final.forEach(e => {
            if(e==tableau_round_5[k]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_2_manche_5')[0].dataset.id){
                e[2] +=1;
            }
        })  
    });

    $('#image_participant_1_manche_5').click(function(){
        if(k<1){
            document.getElementById("section_round_5").style.display = "none";
            document.getElementById("section_gagnant").style.display = "flex";
            k=0;
            affiche_gagnant();
        }
    })

    $('#image_participant_2_manche_5').click(function(){
        tableau_round_6.push(tableau_round_5[k+1]);
        t_final.forEach(e => {
            if(e==tableau_round_5[k+1]){
                e[2] += 1;
                e[3] += 1;
            }
            if(e[0] == document.getElementsByClassName('participant_1_manche_5')[0].dataset.id){
                e[2] +=1;
            }
        })  
    });

    $('#image_participant_2_manche_5').click(function(){
        if(k<1){
            document.getElementById("section_round_5").style.display = "none";
            document.getElementById("section_gagnant").style.display = "flex";
            k=0;
            affiche_gagnant();
        }
    });
})