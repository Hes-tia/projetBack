<?php
    session_start();

    $pageTitle="La bibliothèque";
    $pageSubTitle="Retrouver les livres disponible ici!";

    $buttonList=[
        ["label" => "acceuil","url" => "../controller/home.php"], 
        ["label" => "bibliothèque","url" => "../controller/books.php"]
    ];

    require_once("../view/booksView.php")
?>

