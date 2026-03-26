<?php
require_once("datas.php");
if(isset($POST["ajouter"])){
    $newPlat =[
        "code" =>count($plats)+1,
        "nom" => $_POST["nom"],
        "prix"=> $_POST["prix"],
        "categorie"=> $_POST["categorie"],
        "disponibilite"=> $_POST["disponibilite"],
    ];
    addNewPlat($plats,$newPlat);
    echo"Plat Ajouté";
   header("Location : index.php?page=liste");
}