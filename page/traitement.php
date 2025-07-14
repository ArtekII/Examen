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
            header('Location:index.php?id='.$login['id_membre']);
        }
        else{
            header('Location:login.php?erreur');
        }
    }

    if(isset($_POST['mail_i']) && isset($_POST['mdp_i']) && isset($_POST['nom']) 
    && isset($_POST['genre']) && isset($_POST['date_naissance']) && $_POST['ville']) {
        $mail=$_POST['mail_i'];
        $mdp=$_POST['mdp'];
        $nom=$_POST['nom'];
        $genre=$_POST['genre'];
        $date_naissance=$_POST['date_naissance'];
        $ville=$_POST['ville'];
        if(insertMembre($nom, $date_naissance, $genre, $mail, $ville, $mdp)) {
            $id=getDernierIdMembre();
            $_SESSION['id_membre']=$id['id_membre'];
            header('Location:index.php');
        } else {
            header('Location:inscription.php?erreur');
        }
    }
?>