<?php 
    session_start();
    require('connexion.php');

    function getMembre($mail,$mdp){
        $sql='SELECT * FROM membre where mail="%s" and mdp="%s"';
        $sql=sprintf($sql,$mail,$mdp);
        $result=mysqli_query(dbconnect(),$sql);
        $membre=mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $membre;
    }

    function insertMembre($nom, $date_naissance, $genre, $mail, $ville, $mdp) {
        $sql='INSERT INTO membre(nom, date_naissance, genre, mail, ville, mdp) VALUES ("%s", "%s", "%s", "%s", "%s", "%s")';
        $sql=sprintf($sql, $nom, $date_naissance, $genre, $mail, $ville, $mdp);
        if($result=mysqli_query(dbconnect(), $sql)) {
            return true;
        }
        return false;
    }

    function getDernierIdMembre() {
        $sql='SELECT id_membre from membre ORDER BY id_membre DESC LIMIT 1';
        $result=mysqli_query(dbconnect(), $sql);
        $id=mysqli_fetch_assoc($result);
        return $id;
    }

    function getMembreById($id) {
        $sql='SELECT * from membre where id_membre="%s"';
        $sql=sprintf($sql, $id);
        $result=mysqli_query(dbconnect(), $sql);
        $membre=mysqli_fetch_assoc($result);
        return $membre;
    }

    function messageErreur() {
        if(!isset($_GET['erreur'])) {
            return '';
        }
        return 'Veuillez reessayer';
    }

    function get_all_objet(){
        $sql='SELECT * FROM objet';
        $result=mysqli_query(dbconnect(), $sql);
        $a=[];
        while($b=mysqli_fetch_assoc($result)){
            $a[]=$b;
        }
        return $a;
    }

    function namec(){
        $sql='SELECT * FROM categorie_objet';
        $result=mysqli_query(dbconnect(), $sql);
        $a=[];
        while($b=mysqli_fetch_assoc($result)){
            $a[]=$b;
        }
        return $a;
    }

    function get_objet_categorie($id){
        $sql='SELECT * FROM objet as o join categorie_objet as co on o.id_categorie=co.id_categorie where co.id_categorie="%s"';
        $sql=sprintf($sql,$id);
        $result=mysqli_query(dbconnect(), $sql);
        $a=[];
        while($b=mysqli_fetch_assoc($result)){
            $a[]=$b;
        }
        return $a;   
    }
?>