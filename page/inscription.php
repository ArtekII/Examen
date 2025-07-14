<?php
    include('../inc/fonction.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg rounded">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Inscription</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="traitement.php">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom" id="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="date_naissance" class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" name="date_naissance" id="date_naissance" required>
                            </div>
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select" name="genre" id="genre" required>
                                    <option value="">-- Choisir --</option>
                                    <option value="M">Homme</option>
                                    <option value="F">Femme</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="mail_i" class="form-label">Email</label>
                                <input type="email" class="form-control" name="mail_i" id="mail_i" required>
                            </div>
                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" class="form-control" name="ville" id="ville" required>
                            </div>
                            <div class="mb-3">
                                <label for="mdp_i" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" name="mdp_i" id="mdp_i" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
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
