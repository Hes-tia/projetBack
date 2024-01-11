<header id="header">
        <div id="logo">
        </div>

        <div id="headerTitle">     
                <H1>
                        <?php echo$pageTitle; ?>
                </H1>

                <H3>
                        <?php echo$pageSubTitle; ?>
                </H3>
        </div>

        <div id="headerLogin">
                <?php
                        if(isset($_SESSION["nom"])){?>

                        <h2>Bonjour <?php echo$_SESSION["nom"] ?></h2>
                        <a class="" href="../controller/logout.php">Deconnexion</a>


                <?php   }else{?>
                        <form method="post" action="../controller/home.php">
                                <input name="nom" type="text">
                                <input class="" type="submit" value="votre nom">
                        </form>

                <?php   }?>

        </div>
</header>

