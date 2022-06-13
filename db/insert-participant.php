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
    ["Killer Bee",0,0,"assets/img/Bee.webp"],
    ["Deidara",0,0,"assets/img/Deidara.webp"],
    ["Gaara",0,0,"assets/img/Gaara.jpg"],
    ["Gai Maito",0,0,"assets/img/Gai.webp"],
    ["Haku",0,0,"assets/img/Haku.webp"],
    ["Hashirama Senju",0,0,"assets/img/Hashirama.webp"],
    ["Hidan",0,0,"assets/img/Hidan.webp"],
    ["Hinata Hyuga",0,0,"assets/img/Hinata.webp"],
    ["Hiruzen Sarutobi",0,0,"assets/img/Hiruzen.png"],
    ["Itachi Uchiwa",0,0,"assets/img/Itachi.webp"],
    ["Jiraya",0,0,"assets/img/Jiraya.webp"],
    ["Kakashi Hatake",0,0,"assets/img/Kakashi.jpg"],
    ["Kakuzu",0,0,"assets/img/Kakuzu.webp"],
    ["Kimimaro",0,0,"assets/img/Kimimaro.webp"],
    ["Kisame Hoshigaki",0,0,"assets/img/Kisame.webp"],
    ["Konan",0,0,"assets/img/Konan.jpg"],
    ["Rock Lee",0,0,"assets/img/Lee.jpg"],
    ["Madara Uchiwa",0,0,"assets/img/Madara.webp"],
    ["Minato Namikaze",0,0,"assets/img/Minato.jpg"],
    ["Naruto Uzumaki",0,0,"assets/img/Naruto.jpg"],
    ["Neji Hyuga",0,0,"assets/img/Neji.webp"],
    ["Obito Uchiwa",0,0,"assets/img/Obito.png"],
    ["Orochimaru",0,0,"assets/img/Orochimaru.webp"],
    ["Pain",0,0,"assets/img/Pain.png"],
    ["Yondaime Raikage",0,0,"assets/img/Raikage.webp"],
    ["Sakura Haruno",0,0,"assets/img/Sakura.png"],
    ["Sasori",0,0,"assets/img/Sasori.webp"],
    ["Sasuke Uchiwa",0,0,"assets/img/Sasuke.png"],
    ["Shikamaru Nara",0,0,"assets/img/Shikamaru.webp"],
    ["Tobirama Senju",0,0,"assets/img/Tobirama.webp"],
    ["Tsunade",0,0,"assets/img/Tsunade.webp"],
    ["Zabuza Momochi",0,0,"assets/img/Zabuza.webp"]
];

function insertDatabase($tableau,$nom){
    global $conn;
    foreach($tableau as $t){
        $test = $conn->prepare("INSERT INTO ".$nom." (nom,nombre_combat,nombre_victoire,img,tournoi_naruto_id) VALUES (:nom , :nombre_combat , :nombre_victoire , :img , 1)");
        $test->bindValue(':nom',$t[0]);
        $test->bindValue(':nombre_combat',$t[1]);
        $test->bindValue(':nombre_victoire',$t[2]);
        $test->bindValue(':img',$t[3]);
        $test->execute();
    }
}

insertDatabase($tournois,$nom_tournoi);

//insertDatabase($tournois_films,$nom_tournoi_film);


require('../templates/footer.php'); ?>