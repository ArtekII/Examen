<?php
    include('../inc/fonction.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $obj = getObjectById($id);
        $emps = getEmpruntByObj($id);
    } else {
        $obj = null;
        $emps = null;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Objet</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container my-5">
        <?php if ($obj) { ?>
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Fiche de l'objet : <?php echo htmlspecialchars($obj['nom_objet']); ?></h2>
                </div>
                <div class="card-body">
                    <h4>Historique des emprunts :</h4>
                    <?php if (!empty($emps)) { ?>
                        <ul class="list-group list-group-flush">
                            <?php foreach($emps as $e) { ?>
                                <li class="list-group-item">
                                    <strong>Membre :</strong> <?php echo htmlspecialchars($e['nom']); ?> <br>
                                    <strong>Date emprunt :</strong> <?php echo htmlspecialchars($e['date_emprunt']); ?><br>
                                    <strong>Date retour :</strong> <?php echo htmlspecialchars($e['date_retour']); ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } else { ?>
                        <div class="alert alert-info mt-3">Aucun emprunt enregistré pour cet objet.</div>
                    <?php } ?>
                </div>
            </div>
            <a href="index.php" class="btn btn-secondary">Retour</a>
        <?php } else { ?>
            <div class="alert alert-danger">Objet non trouvé.</div>
            <a href="index.php" class="btn btn-secondary">Retour</a>
        <?php } ?>
    </div>
</body>
</html>
