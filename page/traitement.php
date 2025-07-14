<?php 
    include('../inc/fonction.php');

    if(isset($_POST['mail']) && isset($_POST['mdp'])){
        $mail=$_POST['mail'];
        $mdp=$_POST['mdp'];
        $login=getMembre($mail,$mdp);
        // echo $login['mail'];
        // echo $login['mdp'];
        if($login['mail']==$mail && $login['mdp']==$mdp){
            $_SESSION['id_membre']=$login['id_membre'];
            header('Location:index.php');
        }
        else{
            header('Location:login.php?erreur');
        }
    }

    if(isset($_POST['mail_i']) && isset($_POST['mdp_i']) && isset($_POST['nom']) 
    && isset($_POST['genre']) && isset($_POST['date_naissance']) && $_POST['ville']) {
        $mail=$_POST['mail_i'];
        $mdp=$_POST['mdp_i'];
        $nom=$_POST['nom'];
        $genre=$_POST['genre'];
        $date_naissance=$_POST['date_naissance'];
        $ville=$_POST['ville'];

        // echo $mail.' '.$mdp.' '.$nom.' '.$genre.' '.$date_naissance.' '.$ville;
        if(insertMembre($nom, $date_naissance, $genre, $mail, $ville, $mdp)) {
            $id=getDernierIdMembre();
            $_SESSION['id_membre']=$id['id_membre'];
            header('Location:index.php');
        } else {
            header('Location:inscription.php?erreur');
        }
    }

    

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titre']) && isset($_POST['objet'])) {
    $titre = trim($_POST['titre']);
    $nom = trim($_POST['objet']);
    $id_cat = $_POST['categorie'];

    if (insertObjet($nom, $id_cat, $_SESSION['id_membre'])) {
        $objet = getDernierIdObjet();
        $id_objet = $objet['id_objet'];

        $uploadDir = __DIR__ . '/../assets/images/';
        $maxSize = 2 * 1024 * 1024; // 2MB
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/jpg'];

        if (!empty($_FILES['fichier']) && $_FILES['fichier']['error'] !== UPLOAD_ERR_NO_FILE) {
            $file = $_FILES['fichier'];

            if ($file['error'] !== UPLOAD_ERR_OK) {
                header("Location: upload.php?erreur=upload");
                exit;
            }

            if ($file['size'] > $maxSize) {
                header("Location: upload.php?erreur=size");
                exit;
            }

            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mime = finfo_file($finfo, $file['tmp_name']);
            finfo_close($finfo);

            if (!in_array($mime, $allowedMimeTypes)) {
                header("Location: upload.php?erreur=mime");
                exit;
            }

            $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $newName = $titre . '_' . uniqid() . '.' . $extension;

            if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {
                if (insertImage($newName, $id_objet)) {
                    header("Location: index.php");
                    exit;
                } else {
                    header("Location: upload.php?erreur=db");
                    exit;
                }
            } else {
                header("Location: upload.php?erreur=move");
                exit;
            }
        } else {
            if (insertImage('defaut.png', $id_objet)) {
                header("Location: index.php");
                exit;
            } else {
                header("Location: upload.php?erreur=db");
                exit;
            }
        }
    } else {
        // echo $nom.' '.$id_cat.' '.$
        header("Location: upload.php?erreur=objet");
        exit;
    }
}

if(isset($_POST['id_objet']) && isset($_POST['etat'])) {
    $id_objet=$_POST['id_objet'];
    $etat=$_POST['etat'];
    // echo $id_objet.' '.$etat;
    if(insertEtatObj($etat, $id_objet)) {
        header('Location:index.php');
    } else {
        header('Location:retourne.php?id='.$id_objet.'&erreur');
    }
}
?>