<?php
    include('../inc/fonction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg rounded">
                    <div class="card-header bg-success text-white text-center">
                        <h3 class="mb-0">Connexion</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="traitement.php">
                            <div class="mb-3">
                                <label for="mail" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" name="mail" id="mail" required>
                            </div>
                            <div class="mb-3">
                                <label for="mdp" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="mdp" id="mdp" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Valider</button>
                            </div>
                        </form>
                        <?php if ($error = messageErreur()): ?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?= $error ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
