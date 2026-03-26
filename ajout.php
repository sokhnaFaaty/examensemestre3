<h1>Ajouter un nouveau plat</h1>

<form method="POST" action="index.php?page=ajout">
    <label>Nom :</label>
    <input type="text" name="nom" required><br><br>

    <label>Prix :</label>
    <input type="number" name="prix" step="0.01" required><br><br>

    <label>Catégorie :</label>
    <select name="categorie" required>
        <option value="Entree">Entrée</option>
        <option value="Plat">Plat</option>
        <option value="Dessert">Dessert</option>
    </select><br><br>

    <label>Disponibilité :</label>
    <select name="disponibilite" required>
        <option value="Disponible">Disponible</option>
        <option value="Non disponible">Non disponible</option>
    </select><br><br>

    <button type="submit">Ajouter le plat</button>
</form>