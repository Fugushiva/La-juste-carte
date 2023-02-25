<!DOCTYPE html>
<?php 
//définition des cartes à jouer
    $carteAJouer = [
        "as de coeur",
        "as de carreaux",
        "as de pique",
        "as de trefle",
        "deux de coeur",
        "deux de carreaux",
        "deux de pique",
        "deux de trefle",
        "trois de coeur",
        "trois de carreaux",
        "trois de pique",
        "trois de trefle",
        "quatre de coeur",
        "quatre de carreaux",
        "quatre de pique",
        "quatre de trefle",
        "cinq de coeur",
        "cinq de carreaux",
        "cinq de pique",
        "cinq de trefle",
        "six de coeur",
        "six de carreaux",
        "six de pique",
        "six de trefle",
        "sept de coeur",
        "sept de carreaux",
        "sept de pique",
        "sept de trefle",
        "huit de coeur",
        "huit de carreaux",
        "huit de pique",
        "huit de trefle",
        "neuf de coeur",
        "neuf de carreaux",
        "neuf de pique",
        "neuf de trefle",
        "dix de coeur",
        "dix de carreaux",
        "dix de pique",
        "dix de trefle",
        "valet de coeur",
        "valet de carreaux",
        "valet de pique",
        "valet de trefle",
        "dame de coeur",
        "dame de carreaux",
        "dame de pique",
        "dame de trefle",
        "roi de coeur",
        "roi de carreaux",
        "roi de pique",
        "roi de trefle"
    ];
    //si rien dans la variable du lien
    if(empty($_GET["carte"])){
    //selection de 3 cartes aléatoires
    $carteAleatoires = array_rand($carteAJouer, 3);
    //sinon
    }else{
        //affiche la carte sur laquelle je clique
        echo $_GET["carte"];
    }



?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Diseur</title>
    
</head>
<body>
    <!--si la variable du lien est vide continue à afficher des carte aléatoires-->
    <?php if(empty($_GET["carte"])){?>
    <?php foreach($carteAleatoires as $carte){ ?>
    <a href="<?=$_SERVER["PHP_SELF"]?>?carte=<?=$carteAJouer[$carte] ?>"><img src = "img/<?=$carteAJouer[$carte]?>.svg" alt="<?=$carteAJouer[$carte]?>" width = "200px">
    <?php } ?>
    <?php }?>
</body>
</html>