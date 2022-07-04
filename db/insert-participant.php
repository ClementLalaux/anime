<?php


require "./db.php";

$nom_tournoi = "participants_naruto";
$nom_tournoi_film = "participants_films";
$cle_etrangere_naruto = "tournoi_naruto_id";

$tournois = [
    ["Killer Bee",0,0,"assets/img/tournoi_naruto/Bee.webp"],
    ["Deidara",0,0,"assets/img/tournoi_naruto/Deidara.webp"],
    ["Gaara",0,0,"assets/img/tournoi_naruto/Gaara.jpg"],
    ["Gai Maito",0,0,"assets/img/tournoi_naruto/Gai.webp"],
    ["Haku",0,0,"assets/img/tournoi_naruto/Haku.webp"],
    ["Hashirama Senju",0,0,"assets/img/tournoi_naruto/Hashirama.webp"],
    ["Hidan",0,0,"assets/img/tournoi_naruto/Hidan.webp"],
    ["Hinata Hyuga",0,0,"assets/img/tournoi_naruto/Hinata.webp"],
    ["Hiruzen Sarutobi",0,0,"assets/img/tournoi_naruto/Hiruzen.png"],
    ["Itachi Uchiwa",0,0,"assets/img/tournoi_naruto/Itachi.webp"],
    ["Jiraya",0,0,"assets/img/tournoi_naruto/Jiraya.webp"],
    ["Kakashi Hatake",0,0,"assets/img/tournoi_naruto/Kakashi.jpg"],
    ["Kakuzu",0,0,"assets/img/tournoi_naruto/Kakuzu.webp"],
    ["Kimimaro",0,0,"assets/img/tournoi_naruto/Kimimaro.webp"],
    ["Kisame Hoshigaki",0,0,"assets/img/tournoi_naruto/Kisame.webp"],
    ["Konan",0,0,"assets/img/tournoi_naruto/Konan.jpg"],
    ["Rock Lee",0,0,"assets/img/tournoi_naruto/Lee.jpg"],
    ["Madara Uchiwa",0,0,"assets/img/tournoi_naruto/Madara.webp"],
    ["Minato Namikaze",0,0,"assets/img/tournoi_naruto/Minato.jpg"],
    ["Naruto Uzumaki",0,0,"assets/img/tournoi_naruto/Naruto.jpg"],
    ["Neji Hyuga",0,0,"assets/img/tournoi_naruto/Neji.webp"],
    ["Obito Uchiwa",0,0,"assets/img/tournoi_naruto/Obito.png"],
    ["Orochimaru",0,0,"assets/img/tournoi_naruto/Orochimaru.webp"],
    ["Pain",0,0,"assets/img/tournoi_naruto/Pain.png"],
    ["Yondaime Raikage",0,0,"assets/img/tournoi_naruto/Raikage.webp"],
    ["Sakura Haruno",0,0,"assets/img/tournoi_naruto/Sakura.png"],
    ["Sasori",0,0,"assets/img/tournoi_naruto/Sasori.webp"],
    ["Sasuke Uchiwa",0,0,"assets/img/tournoi_naruto/Sasuke.png"],
    ["Shikamaru Nara",0,0,"assets/img/tournoi_naruto/Shikamaru.webp"],
    ["Tobirama Senju",0,0,"assets/img/tournoi_naruto/Tobirama.webp"],
    ["Tsunade",0,0,"assets/img/tournoi_naruto/Tsunade.webp"],
    ["Zabuza Momochi",0,0,"assets/img/tournoi_naruto/Zabuza.webp"]
];

$tournois_films = [
    ["Forrest Gump",0,0,"assets/img/tournoi_film/forrest_gump.jpg"],
    ["La Liste de Schindler",0,0,"assets/img/tournoi_film/liste_de_schindler.jpg"],
    ["La Ligne verte",0,0,"assets/img/tournoi_film/ligne_verte.jpg"],
    ["12 hommes en colère",0,0,"assets/img/tournoi_film/douze_hommes_en_colere.jpg"],
    ["Le Parrain",0,0,"assets/img/tournoi_film/le_parrain.webp"],
    ["Les Evadés",0,0,"assets/img/tournoi_film/les_evades.jpg"],
    ["Le Seigneur des anneaux : le retour du roi",0,0,"assets/img/tournoi_film/seigneur_des_anneaux_retour_du_roi.jpg"],
    ["Le Roi Lion",0,0,"assets/img/tournoi_film/roi_lion.jpg"],
    ["Vol au-dessus d'un nid de coucou",0,0,"assets/img/tournoi_film/vol_au_dessus_d_un_nid_de_coucou.jpg"],
    ["The Dark Knight : Le Chevalier Noir",0,0,"assets/img/tournoi_film/dark_knight.jpg"],
    ["Pulp Fiction",0,0,"assets/img/tournoi_film/pulp_fiction.jpg"],
    ["Il était une fois dans l'Ouest",0,0,"assets/img/tournoi_film/il_etait_une_fois_dans_l_ouest.jpg"],
    ["Le Bon la brute et le truand",0,0,"assets/img/tournoi_film/le_bon.jpg"],
    ["Il était une fois en Amérique",0,0,"assets/img/tournoi_film/il_etait_une_fois_en_amerique.jpg"],
    ["Django Unchained",0,0,"assets/img/tournoi_film/django_unchained.webp"],
    ["Gran Torino",0,0,"assets/img/tournoi_film/gran_torino.jpg"],
    ["Le Seigneur des anneaux : la communauté de l'anneau",0,0,"assets/img/tournoi_film/seigneur_des_anneaux_la_communauté_de_l_anneaux.jpg"],
    ["Gladiator",0,0,"assets/img/tournoi_film/gladiator.jpg"],
    ["Le Seigneur des anneaux : les deux tours",0,0,"assets/img/tournoi_film/seigneur_des_anneaux_les_deux_tours.jpg"],
    ["Interstellar",0,0,"assets/img/tournoi_film/interstellar.jpg"],
    ["Star Wars : Episode V - L'Empire contre-attaque",0,0,"assets/img/tournoi_film/star_wars_l_empire_contre_attaque.jpg"],
    ["Seven",0,0,"assets/img/tournoi_film/seven.jpg"],
    ["Coco",0,0,"assets/img/tournoi_film/coco.webp"],
    ["Your Name",0,0,"assets/img/tournoi_film/your_name.jpg"],
    ["Parasite",0,0,"assets/img/tournoi_film/parasite.jpg"],
    ["Fight Club",0,0,"assets/img/tournoi_film/fight_club.jpg"],
    ["Les Affranchis",0,0,"assets/img/tournoi_film/les_affranchis.jpg"],
    ["Inception",0,0,"assets/img/tournoi_film/inception.png"],
    ["Retour vers le futur",0,0,"assets/img/tournoi_film/retour_vers_le_futur.jpg"],
    ["Le Tombeau des lucioles",0,0,"assets/img/tournoi_film/le_tombeau_des_lucioles.jpg"],
    ["Le Silence des agneaux",0,0,"assets/img/tournoi_film/le_silence_des_agneaux.jpg"],
    ["Joker",0,0,"assets/img/tournoi_film/joker.jpg"]
];

function insertDatabase($tableau){
    global $conn;
    foreach($tableau as $t){
        $test = $conn->prepare("INSERT INTO participants (nom,nombre_combat,nombre_victoire,img,taux_victoire,liste_tournois_idliste_tournois) VALUES (:nom , :nombre_combat , :nombre_victoire , :img , 0, 7)");
        $test->bindValue(':nom',$t[0]);
        $test->bindValue(':nombre_combat',$t[1]);
        $test->bindValue(':nombre_victoire',$t[2]);
        $test->bindValue(':nombre_victoire',$t[2]);
        $test->bindValue(':img',$t[3]);
        $test->execute();
    }
}

insertDatabase($tournois);

//insertDatabase($tournois_films,$nom_tournoi_film);


require('../templates/footer.php'); ?>