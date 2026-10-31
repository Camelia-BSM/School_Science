<?php
if(isset($_POST["niveau"])) {
    $niveau = $_POST["niveau"];
    header("Location: ../pages/matiere.php");
    if(isset($_POST["matiere"])) {
        $matiere = $_POST["matiere"];
        echo $niveau;
        echo $matiere;
        header("Location: ../pages/matiere.php");
        exit();
    }
}




?>