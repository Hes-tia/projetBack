<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <?php 
    require_once("../view/modules/header.php");
    require_once("../view/modules/nav.php");
    ?>

    <main>
        <div class="bookcontainer">
            <div class="line" id="firstLine">
                <div class="titre">Titre</div>
                <div class="auteur">Auteur</div>
                <div class="genre">Genre</div>
                <div class="Annee">Année</div>
                <div class="detail">Détail</div>
            </div>

            <?php
                foreach($bookList as $book) {
                ?>
                <div class="line">
                    <div class="titre"><?php echo $book['titre']?></div>
                    <div class="auteur"><?php echo $book['auteur']?></div>
                    <div class="genre"><?php echo $book['nom']?></div>
                    <div class="Annee"><?php echo $book['année']?></div>
                    <div class="detail"></div>

                </div>

                <?php
                }
            ?>
        </div>
    </main>

    <?php
        require_once("../view/modules/footer.php");
    ?>
</body>
</html>