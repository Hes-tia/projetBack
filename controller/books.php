<?php
    session_start();

    require_once("../model/model.php");

    $bookBDD= connectDB();
    $bookList= getAllBooks($bookBDD);

    if(!isset($_SESSION['nom'])){
        header('location:../controller/home.php');
    }

    $pageTitle="La bibliothèque";
    $pageSubTitle="Retrouver les livres disponible ici!";

    $buttonList=[
        ["label" => "acceuil","url" => "../controller/home.php"], 
        ["label" => "bibliothèque","url" => "../controller/books.php"]
    ];

    require_once("../view/booksView.php")
?>