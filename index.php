<?php

// Pour debug
var_dump($_GET);

// Structure de routage : définir la page qui sera inclue, en fonction de la valeur de $_GET["page"] (choix utilisateur)
// Si $_GET["page"] est défini :
if(isset($_GET["page"])) {

    switch($_GET["page"]) {
        case "page1" : $pageAInclure = "page1.php"; 
        break;
        case "page2" : $pageAInclure = "page2.php"; 
        break;
        case "page3" : $pageAInclure = "page3.php"; 
        break;
        case "vuearticle" : $pageAInclure = "vuearticle.php"; 
        break;
        default : $pageAInclure = "page1.php"; 
    }
// Sinon :
} else {
    $pageAInclure = "page1.php";
}


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
    <?php require "html/$pageAInclure" ?>

    </div>

    <script src="script.js"></script>
</body>
</html>