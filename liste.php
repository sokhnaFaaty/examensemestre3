<h1>Liste des Plats du restaurant </h1>

<table border="1" cellpadding="20">
    <thead>
        <th>Code</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Categorie</th>
        <th>Disponibilité</th>
    </thead>
    <tr>
 <?php foreach($plats as $plat):?>
    <td><?= $plat["code"] ?></td>
    <td><?= $plat["nom"] ?></td>
    <td><?= $plat["prix"] ?></td>
    <td><?= $plat["categorie"] ?></td>
    <td><?= $plat["disponibilite"] ?></td>
 <?php endforeach?>
 </tr>
 </table>
