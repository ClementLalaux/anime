<?php


require "./db.php";

global $conn;

$tournois = [
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

$nom_tournoi = "tournoi_naruto";

foreach($tournois as $tournoi){
    $test = $conn->prepare("INSERT INTO tournoi_naruto (nom,nombre_combat,nombre_victoire,img) VALUES (:nom , :nombre_combat , :nombre_victoire , :img)");
    $test->bindValue(':nom',$tournoi[0]);
    $test->bindValue(':nombre_combat',$tournoi[1]);
    $test->bindValue(':nombre_victoire',$tournoi[2]);
    $test->bindValue(':img',$tournoi[3]);
    $test->execute();
}




require('../templates/footer.php'); ?>