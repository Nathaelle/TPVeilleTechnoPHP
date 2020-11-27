<?php

require "articles.php";
//var_dump($articles[0]);

$article = $articles[2];

?>

<p><a href="index.php?page=page1">Les news du jour</a> / <?= $article["titre"] ?></p>

<article>
    <p class="date">Par <?= $article["auteur"] ?> le <?= $article["date"] ?></p>
    <h2><?= $article["titre"] ?></h2>
    <p class="news main"><?= $article["description"] ?></p>
    <div class="art">
        <div class="img-cont"><img class="img-resp" src="img/<?= $article["image"] ?>" alt=""></div>
        <p class="news">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, asperiores? Vero maxime ab iusto, sint hic quibusdam odit officiis possimus atque labore quos commodi omnis id dolore minima laboriosam eligendi aliquam sit, itaque optio cupiditate. Minima numquam veniam officiis molestias sequi perspiciatis labore consequuntur doloremque officia odit delectus, molestiae vero consectetur soluta temporibus, aliquam eligendi, non dolore distinctio saepe. Placeat est vero beatae dolores quia?</p>
    </div>
    
</article> 