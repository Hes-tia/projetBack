<?php

    function connectDB() {
        $bdd= new PDO('mysql:host=127.0.0.1:3306;dbname=silence_on_lit;charset=utf8','sol_admin','J43B!sgFNlgmVz2y');

        return $bdd;
    }

    function getAllBooks($bdd) {
        $sqlQuery = "SELECT * FROM `livres_vw`  ORDER BY `Année` DESC";
        $logStatement = $bdd->prepare($sqlQuery);
        $logStatement->execute();
        $req = $logStatement->fetchAll();
        $logStatement->closeCursor();
        
        return $req;
    }