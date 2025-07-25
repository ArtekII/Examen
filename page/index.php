<?php
    include('../inc/fonction.php');
    $objet = get_all_objet();
    $cat = namec();
    if (isset($_POST['categorie'])) {
        $objcat = get_objet_categorie($_POST['categorie']);
    } else {
        $objcat = null;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    

    <main class="container my-5">
        <?php if (!isset($_SESSION['id_membre'])) { ?>
            <div class="text-center">
                <p><a href="login.php" class="btn btn-outline-primary">Se connecter</a></p>
                <p><a href="inscription.php" class="btn btn-outline-success">Créer un compte</a></p>
            </div>
        <?php } else {
            $emprunts = getEmpruntByMembre($_SESSION['id_membre']);
            $membre = getMembreById($_SESSION['id_membre']); ?>
            <div class="text-center mb-4">
                <h1 class="mb-3">Bienvenue, <a href="fiche.php"><?php echo htmlspecialchars($membre['nom']); ?></a></h1>
                <img src="../assets/images/<?php echo htmlspecialchars($membre['image_profile']); ?>" alt="Profile" class="rounded-circle" width="120" height="120">
                <div>
                    <h4>Liste de vos emprunts :</h4>
                    <?php foreach($emprunts as $e) { ?>
                        <p>Objet : <strong><?php echo $e['nom_objet']; ?></strong>  - emprunte le : <?php echo $e['date_emprunt']; ?></p>
                        <?php if($e['etat']==null) { ?>
                            <button><a href="retourne.php?id=<?php echo $e['id_objet']; ?>">Retourner</a></button>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <div>
                <button><a href="etat.php">Voir les etat d'objet retourner</a></button>
            </div>

            <div class="card mb-4 shadow">
                <div class="card-body">
                    <h4 class="card-title">Filtrer par catégorie</h4>
                    <form method="post" action="index.php" class="row g-3 align-items-center">
                        <div class="col-auto">
                            <select name="categorie" class="form-select" required>
                                <option value="">-- Choisir une catégorie --</option>
                                <?php foreach ($cat as $c) { ?>
                                    <option value="<?php echo $c['id_categorie'] ?>">
                                        <?php echo htmlspecialchars($c['nom_categorie']); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Filtrer</button>
                        </div>
                    </form>
                    <br>
                    <nav>
                        <form method="post" action="recherche.php">
                            <input placeHolder="Recherche un objet..." type="text" name="recherche" id="">
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </form>
                    </nav>
                </div>
            </div>

            <div>
                <a href="upload.php" class="btn btn-primary">Ajouter une image</a>
            </div>

            <h3>Liste des objets</h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                $objets_a_afficher = $objcat ?? $objet;
                foreach ($objets_a_afficher as $ob) { ?>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body">
                                <a href="fiche_objet.php?id=<?php echo $ob['id_objet']; ?>"><h5 class="card-title"><?php echo htmlspecialchars($ob['nom_objet']); ?></h5>
                                <img src="../assets/images/<?php echo $ob['nom_image']; ?>" alt="" class="card-img-top"></a>
                                <form method="post" action="emprunter.php">
                                    <button type="submit">Emprunter</button> 
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="deconnexion.php">Se deconnecter</a>
        <?php } ?>
    </main>
</body>
</html>
