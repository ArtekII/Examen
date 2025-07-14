<?php
    include('../inc/fonction.php');
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $objet = getObjectById($id);
    } else {
        $objet = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retourner Objet</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">
                            Retour de l’objet : 
                            <span class="text-primary"><?php echo htmlspecialchars($objet['nom_objet']); ?></span>
                        </h3>

                        <form action="traitement.php" method="post">
                            <input type="hidden" name="id_objet" value="<?php echo $objet['id_objet']; ?>">

                            <div class="mb-3">
                                <label for="etat" class="form-label">État de l’objet :</label>
                                <select name="etat" id="etat" class="form-select" required>
                                    <option value="Ok">Ok</option>
                                    <option value="Abime">Abîmé</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">
                                    Retourner l’objet
                                </button>
                                <a href="index.php" class="btn btn-outline-secondary">Annuler</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
