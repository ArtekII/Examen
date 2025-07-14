<?php
    include('../inc/fonction.php');
    $ok = nbrEtat('Ok');
    $abime = nbrEtat('Abime');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>État des Objets</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">Statistiques des Objets Retourner</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-success shadow-sm mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title text-success">Objets en bon état</h5>
                        <p class="display-6 fw-bold"><?php echo $ok['nbrEtat']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-danger shadow-sm mb-3">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger">Objets abîmés</h5>
                        <p class="display-6 fw-bold"><?php echo $abime['nbrEtat']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-outline-primary">Retour à l'accueil</a>
        </div>
    </div>
</body>
</html>
