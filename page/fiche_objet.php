<?php
    include('../inc/fonction.php');
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $obj=getObjectById($id);
    } else {
        $obj=null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Objet</title>
</head>
<body>
    <h1>Fiche de l'objet : <?php echo $obj['nom_objet']; ?></h1>
    <h3>Historique des emprunts :</h3>
</body>
</html>