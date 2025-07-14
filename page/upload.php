<?php
    include('../inc/fonction.php');
    $cats = namec();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="container py-5">
    <h2 class="mb-4">Ajouter un objet avec image</h2>

    <form action="traitement.php" method="post" enctype="multipart/form-data" class="border p-4 rounded shadow-sm bg-light">
        <div class="mb-3">
            <label for="objet" class="form-label">Nom de l'objet</label>
            <input type="text" name="objet" id="objet" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="categorie" class="form-label">Catégorie</label>
            <select name="categorie" id="categorie" class="form-select" required>
                <?php foreach($cats as $c) { ?> 
                    <option value="<?php echo $c['id_categorie']; ?>"><?php echo $c['nom_categorie']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="titre" class="form-label">Nom de l'image</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fichier" class="form-label">Fichier image</label>
            <input type="file" name="fichier" id="fichier" class="form-control">
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Valider</button>
            <a href="index.php" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
