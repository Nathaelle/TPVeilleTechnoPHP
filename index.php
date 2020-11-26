<?php

var_dump($_GET);






?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Navigation en PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bonjour !</h1>
    <ul class="menu">
        <li><a href="index.php?page=page1">Les news du jour</a></li>
        <li><a href="index.php?page=page2">La météo</a></li>
        <li><a href="index.php?page=page3">Mon horoscope</a></li>
    </ul>
    <p class="date"></p>

    <div class="content">

    <!-- Ici se trouvera le html spécifique à chaque page -->

    </div>

</body>
</html>