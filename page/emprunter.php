<?php
    include('../inc/fonction.php');
    $emprunt=getEmpruntByObj($_SESSION['id_objet']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprunt</title>
</head>
<body>
    <?php foreach($emprunt as $e){?>
            <?php echo $e ?>
            <?php }?>
    <a href="index.php">Retour</a>
</body>
</html>