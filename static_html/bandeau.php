<?php
session_start();

$matiere = $_SESSION["matiere"] ;
$niveau = $_SESSION["niveau"];
echo $matiere;
echo $niveau;
?>


<div class="bandeau">
    <form action="../traitement/page_accueil.php" method="post" name="niveau">
        <select name="choix_niveau" onchange="window.location.href = this.value">
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/terminal.php'>Terminal</option>";
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/premiere.php'>Premiere</option>"
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/seconde.php'>Seconde</option>"
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/3eme.php'>3eme</option>"
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/4eme.php'>4eme</option>"
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/5eme.php'>5eme</option>"
            ?>
            <?php
                echo "<option value='/School_Science/cours_$matiere/pages_accueil_$matiere/6eme.php'>6eme</option>"
            ?>
        </select>
    </form>


    <form action="../traitement/page_accueil.php" method="post" name="matiere">
        <select name="choix_matiere" id="">
            <option value="physique">Physique</option>
            <option value="math">Mathématique</option>
        </select>
    </form>
</div>

