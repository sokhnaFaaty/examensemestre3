   <button><a href="index.php">Voir liste</a></button>
  <div>
   <div class="carte-plat">
           <h2>Détail d'un plat</h2>
           <p>
                   <strong>Code :</strong> <?= $plat['code'] ?>
           </p>
           <p>
                   <strong>Nom :</strong> <?= $plat['nom'] ?>
           </p>
           <p>
                   <strong>Prix :</strong> <?= $plat['prix'] ?>
           </p>
           <p>
                   <strong>Categorie :</strong> <?= $plat['categorie'] ?>
           </p>
           <p>
                   <strong>Disponibilite :</strong> <?= $plat['disponibilte'] ?>
           </p>
   </div>

   </div>