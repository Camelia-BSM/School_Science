<?php
session_start();

if(isset($_POST["niveau"])) {
    $_SESSION["niveau"] = $_POST["niveau"];
    header("Location: ../pages/matiere.php");
}

if(isset($_POST["matiere"])) {
    $_SESSION["matiere"] = $_POST["matiere"];
    $niveau = $_SESSION["niveau"];
    $matiere = $_SESSION["matiere"];
    echo $matiere;
    echo $niveau;
    header("Location: ../cours_$matiere/pages_accueil_$matiere/$niveau.php");
    exit();
}




?>