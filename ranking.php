<?php

require('./templates/header.php');
require "./db/db.php";
// On détermine sur quelle page on se trouve
if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']);
}else{
    $currentPage = 1;
}


// On détermine le nombre total d'articles
$sql = 'SELECT COUNT(*) AS nb_articles FROM `participants`;';

// On prépare la requête
$query = $conn->prepare($sql);

// On exécute
$query->execute();

// On récupère le nombre d'articles
$result = $query->fetch();

$nbArticles = (int) $result['nb_articles'];

// On détermine le nombre d'articles par page
$parPage = 8;

// On calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage);

// Calcul du 1er article de la page
$premier = ($currentPage * $parPage) - $parPage;

$sql = 'SELECT * FROM participants INNER JOIN liste_tournois on participants.liste_tournois_idliste_tournois = liste_tournois.idliste_tournois ORDER BY taux_victoire DESC LIMIT :premier, :perPage';

// On prépare la requête
$query = $conn->prepare($sql);

$query->bindValue(':premier', $premier, PDO::PARAM_INT);
$query->bindValue(':perPage', $parPage, PDO::PARAM_INT);

// On exécute
$query->execute();

// On récupère les valeurs dans un tableau associatif
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

?>
    <div class="container">
        <div class="row">
            <section class="col-12">
                <h1>Liste des articles</h1>
                <table class="table ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Nombre combat</th>
                            <th>Nombre victoire</th>
                            <th>Taux de victoire</th>
                            <th>Thème associé</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php
                        foreach($articles as $article){
                        ?>
                            <tr>
                                <td><?= $article['idparticipants'] ?></td>
                                <td><?= $article['nom'] ?></td>
                                <td><?= $article['nombre_combat'] ?></td>
                                <td><?= $article['nombre_victoire'] ?></td>
                                <td><?= $article['taux_victoire'] ?></td>
                                <td><?= $article['description'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <nav class="d-flex justify-content-center pt-3">
                    <ul class="pagination">
                        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
                        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                            <a href="?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
                        </li>
                        <?php for($page = 1; $page <= $pages; $page++): ?>
                          <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
                          <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                                <a href="?page=<?= $page ?>" class="page-link"><?= $page ?></a>
                            </li>
                        <?php endfor ?>
                          <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
                          <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
                            <a href="?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>