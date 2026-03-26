<?php
require_once("datas.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $page=$_GET["page"];
    if (isset($page)) {
        require_once("menu.php");
        if ($page == "detail") {
        
            require_once("./detail.php");
        } else if ($page == "liste") {
            require_once("./liste.php");
        } else if ($page == "ajout") {
    require_once("./traitementAjout.php");
            require_once("./ajout.php");
        } else {
            echo "Error 404 ! Page introuvable";
        }
    }


    ?>

</body>

</html>