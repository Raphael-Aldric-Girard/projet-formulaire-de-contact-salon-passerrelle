<?php
    //recupere les informations du formulaire html
    if(isset($_POST['submit'])){
        $identifiant=$_POST['identifiant'];
        $mdp=$_POST['mdp'];
    }
    $identifiant_acces='katia';
    $mot_de_passe = '1234';
    if ($identifiant == $identifiant_acces) {
        if($mdp==$mot_de_passe) {
            header("Location: indexxx.html");
            exit;
        }
    }
?>