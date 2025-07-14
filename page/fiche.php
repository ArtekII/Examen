<?php 
    include('../inc/fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fiche</title>
</head>
<body>
    <h1>Votre profile:</h1>
    <?php $membre = getMembreById($_SESSION['id_membre']); ?>
            <div class="text-center mb-4">
                <img src="../assets/images/<?php echo htmlspecialchars($membre['image_profile']); ?>" alt="Profile" class="rounded-circle" width="120" height="120">
                    <h3><?php echo $membre['nom']?></h3>
                    <h3><?php echo $membre['date_de_naissance']?></h3>
                    <h3><?php echo $membre['genre']?></h3>
                    <h3><?php echo $membre['ville'] ?></h3>
            </div>
    <h2>liste des objets:</h2>
    <?php $objet = objetcate($_SESSION['id_membre'])?>
    <?php foreach($objet as $obj){?>
    <?php echo $obj['nom_objet']?>
    <?php }?>
    <br>
    <br>
    <a href="index.php">Retour</a>
</body>
</html>