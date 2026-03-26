<?php
require_once("datas.php");
do {
    menu();
    echo "Entrez votre choix: ";
    $choix = intval(trim(fgets(STDIN)));
    switch ($choix) {
        case 1:
            echo "\n====Ajout d'un plat====\n";
            $newPlat = SaisiNewPlat($plats);
            addNewPlat($plats, $newPlat);
            break;
        case 2:
            listerTouslesPlats($plats);
            break;

        case 3:
            if (empty($plats)) {
                echo "Aucun plat disponible";
            } else {
                rechercherUnPlat($plats);
            }
            break;

        case 4:
            if (empty($plats)) {
                echo "Aucun plat disponible";
            } else {
                echo "Le prix moyen des plats est : ";
                $prixMoyen = calculerLeprixMoyen($plats);
            }
            break;

        case 5:
            if (empty($plats)) {
                echo "Aucun plat disponible";
            } else {
                echo"Le plat le plus cher est :\n";
                $recup=AfficherLeplatlePlusCher($plats);
            }

            break;
        case 6:
            echo "Au revoir !";
            break;

        default:
            echo "Choix indisponible\n";
    }
} while ($choix != 6);
