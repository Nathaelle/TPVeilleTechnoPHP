<!-- Syntaxes alternatives structures php -->


<!-- IF -->

<?php if(true) : ?>

    <p>Paragraphe affiché si la condition est vérifiée</p>

<?php endif ?>


<!-- IF ELSE -->

<?php if(true) : ?>

    <p>Paragraphe affiché si la condition est vérifiée</p>


<?php //elseif(true) : ?>
<?php else : ?>

    <p>Paragraphe qui a peu de chance d'être affiché</p>

<?php endif ?>


<!-- WHILE -->

<?php while($x == true) : ?>

<p>Paragraphe affiché si la condition est vérifiée, et on n'oublie pas de modifier $x !</p>

<?php endwhile ?>


<!-- FOR -->

<?php for($i = 0; $i < 10; $i++) : ?>

<p>Paragraphe qui sera affiché 10 fois !</p>

<?php endfor ?>


<!-- FOREACH -->

<?php foreach($tab as $key => $value) : ?>

<h2><?= $value ?></h2> <!-- Si $value est une chaîne ! -->
<p>Paragraphe qui sera affiché autant de fois qu'il ya a d'élément dans mon tableau !</p>

<?php endforeach ?>