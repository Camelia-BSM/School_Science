<?php
session_start();
?>

<div class="bandeau">
    <form action="../traitement/page_accueil.php" method="post" name="niveau">
        <select name="choix_niveau" id="">
            <option value="Terminal">Terminal</option>
            <option value="Premiere">Premiere</option>
            <option value="Seconde">Seconde</option>
            <option value="3eme">3eme</option>
            <option value="4eme">4eme</option>
            <option value="5eme">5eme</option>
            <option value="6eme">6eme</option>
        </select>
    </form>


    <form action="../traitement/page_accueil.php" method="post" name="matiere">
        <select name="choix_matiere" id="">
            <option value="physique">Physique</option>
            <option value="math">Mathématique</option>
        </select>
    </form>
</div>