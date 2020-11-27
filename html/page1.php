<?php

require_once "articles.php";

//var_dump($articles);

//$html = ""; // <-- On initialise la variable qui contiendra le code HTML de nos articles

// $len = sizeof($articles);// <-- On a besoin de la taille de notre tableau pour pouvoir parcourir chacun de ses éléments

// for($i = 0; $i < $len; $i++) {

//     var_dump($articles[$i]["titre"]);

//     $html .= "<article><h3>" . $articles[$i]["titre"] . "</h3>"; 
//     $html .= "<p class=\"news main\"> " . $articles[$i]["description"] . " <a href=\"index.php?page=article&art=0\">Lire la suite...</a></p>";
//     $html .= "<div class=\"art\"><div class=\"img-cont\"><img class=\"img-resp\" src=\"img/" . $articles[$i]["image"] . "\" alt=\"\"></div></div></article>";
// }

// foreach($articles as $index => $article) {

//     $html .= "<article><h3>Article n°" . ($index + 1) . " " . $article["titre"] . "</h3>"; 
//     $html .= "<p class=\"news main\"> " . substr($article["description"], 0, 100) . "... <a href=\"index.php?page=article&art=0\">Lire la suite...</a></p>";
//     $html .= "<div class=\"art\"><div class=\"img-cont\"><img class=\"img-resp\" src=\"img/" . $article["image"] . "\" alt=\"\"></div></div></article>";

// }


?>

<h2>Les news</h2>

<!-- FOREACH -->

<?php foreach($articles as $index => $article) : ?>

<article>
    <h3><?= $article["titre"] ?></h3>
    <p class="news main"><?= substr($article["description"], 0, 100) ?>...<a href="index.php?page=vuearticle">Lire la suite...</a></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src="img/<?= $article["image"] ?>" alt=""></div>
    </div>
</article>

<?php endforeach ?>


<!-- <article>
    <h3>Lorem ipsum dolor sit amet.</h3>
    <p class="news main">Culpa, distinctio inventore quia, quasi doloremque perferendis quaerat quisquam sunt consequatur alias nobis praesentium, unde nulla aut adipisci doloribus. <a href="index.php?page=article&art=0">Lire la suite...</a></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src="img/art1.webp" alt=""></div>
    </div>
</article> -->