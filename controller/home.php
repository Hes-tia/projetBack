<?php
    /*$prenom = "yanis";
    $nom = "ben hatat";
    $age = 21;
    $displayedText="bonjour {$prenom} {$nom}!";

    $color;

    if($age>30){
        $color="blue";
    } else {
        $color="pink";
    }
    */
    session_start();

    if(isset($_POST["nom"])){
        $_SESSION["nom"]=$_POST["nom"];
    }

    $pageTitle="Silence on lit!";
    $pageSubTitle="Un temps de lecture pour la culture!";

    $buttonList=[
        ["label" => "acceuil","url" => "../controller/home.php"], 
        //["label" => "bibliothèque","url" => "../controller/books.php?"]
    ];

    if(isset($_SESSION['nom'])){
        $buttonList[]=["label" => "bibliothèque","url" => "../controller/books.php"];
    }

    require_once("../view/homeView.php")            
?>
        
