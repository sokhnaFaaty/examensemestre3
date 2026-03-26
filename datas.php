<?php 
$plats = [];
function menu()
{
    echo "===========Menu===========\n";
    echo "1.Ajouter un plat\n";
    echo "2.Afficher tous les plats\n";
    echo "3.Rechercher un plat\n";
    echo "4.Afficher le prix moyen\n";
    echo "5.Afficher le prix le plus cher\n";
    echo "6.Quitter\n";
    echo "=========================\n\n";
}
function SaisiNewPlat(array $plats): array
{
    $newPlat = [];
    $code = count($plats) + 1;
    echo "Entrez le nom du plat\n";
    $nom = trim(fgets(STDIN));
    echo "Entrez le prix du plat\n";
    $prix = trim(fgets(STDIN));
    echo "Entrez le categorie du plat (1:Entree - 2: Plat - 3:Dessert)\n";
    $cat = trim(fgets(STDIN));
    if ($cat == 1) {
        $categorie = "Entree";
    }
    if ($cat == 2) {
        $categorie = "Plat";
    }
    if ($cat == 3) {
        $categorie = "Dessert";
    }
    echo "Entrez la disponibilité du plat (1:Disponible - 2: Non disponible)\n";

    $dispo = trim(fgets(STDIN));
    if ($dispo == 1) {
        $disponibilte = "Disponible";
    }
    if ($dispo == 2) {
        $disponibilte = "Non disponible";
    }

    $newPlat = [
        "code" => $code,
        "nom" => $nom,
        "prix" => $prix,
        "categorie" => $categorie,
        "disponibilite" => $disponibilte,
    ];

    return $newPlat;
};
function addNewPlat(array &$plats, array $newPlat)
{
    $plats[] = $newPlat;
    echo "    Plat ajouté   \n";
}

function listerTouslesPlats(array $plats)
{
    if (empty($plats)) {
        echo "Aucun plat disponible\n";
    } else {
         echo "\n====Affichage de Tous les plats====\n";
        foreach ($plats as $plat) {
echo"------------------------------\n";        
            echo  "Code : " . $plat["code"] . "\n" . "Nom : " . $plat["nom"] . "\n" . "Prix : " . $plat["prix"] . "\n" . "Categorie : " . $plat["categorie"] . "\n" . "Disponibilité : " . $plat["disponibilite"] . "\n";
        }
    }
}
function rechercherUnPlat(array $plats): array
{
    $recup = [];
    echo "Entrez le code : ";
    $code = intval(trim(fgets(STDIN)));
    foreach ($plats as $plat) {
        if ($code == $plat["code"]) {
          $recup=$plat;
        }
    }
    return $recup;
}
function calculerLeprixMoyen(array $plats): float
{
    $s = 0;
    $m = 0;
    $n = count($plats);
    foreach ($plats as $plat) {
        $s = $s + $plat["prix"];
    }
    $m = $s / $n;
    return $m;
}
function AfficherLeplatlePlusCher(array $plats) {
    
    $max=$plats["prix"][0];
    foreach($plats as $plat){
    if($max>$plat["prix"]){
        $plat["prix"]=$max;
    }
    $recupMaxPlat=$plat;
    }
    return $recupMaxPlat;
}

function detailOfOnePlat($plats){
    echo "entrez le code: ";
    $code=trim(fgets(STDIN));
    foreach($plats as $plat){
    if($code==$plat["code"]){
        
        }
    }
}
