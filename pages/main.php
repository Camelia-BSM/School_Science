<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    <title>School_Science</title>
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/static.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@1,14..32,100..900&family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@1,14..32,100..900&family=Lusitana:wght@400;700&family=Major+Mono+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include("../static_html/header.php");
    ?>
    <section>
        <h1 class="slogan">Apprends vite, apprends bien</h1>
        <div class="niveau">
            <div class="college">
                <h1>College</h1>
                <p>Des dizaines de cours proposés gratuitement de <br> la 
                    sixième à la troisième en...</p>
                <div class="niveau_college">
                    <div class="seme">
                        <a href="../pages/matiere.php"><p>6ème</p></a>
                    </div>
                    <div class="ceme">
                        <a href="../pages/matiere.php"><p>5ème</p></a>
                    </div>
                    <div class="qeme">
                        <a href="../pages/matiere.php"><p>4ème</p></a>
                    </div>
                    <div class="teme">
                        <a href="../pages/matiere.php"><p>3ème</p></a>
                    </div>
                </div>
                
                <p class="cob">Objectif : réussir le brevet</p>
            </div>
            <div class="lycee">
                <h1>Lycée</h1>
                <p>Des dizaines de cours proposés gratuitement de <br> la 
                    seconde à la terminale en...</p>
                <div class="niveau_lycee">
                    <div class="Seconde">
                        <a href="/html/matiere.php"><p>Seconde</p></a>
                    </div>
                    <div class="Premiere">
                        <a href="/html/matiere.php"><p>Première</p></a>
                    </div>
                    <div class="Terminale">
                        <a href="/html/matiere.php"><p>Terminale</p></a>
                    </div>
                </div>
                
                <p class="lob">Objectif : réussir le baccalauréat</p>
            </div>
        </div>
        <a href="../pages/actualite.php"><h1 class="actualite">Actualité du site</h1></a>
    </section>
    <?php
    include("../static_html/footer.php")
    ?>
</body>
</html>