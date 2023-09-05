<?php
require ("./config.php");

if (isset($_POST['nom']) and isset($_POST['password'])) {
        $nom = $_POST['nom']; 
        $password = $_POST['password'];
        
    if ($nom == NULL or $password == NULL) {
        echo "réessaie en écrivant quelque chose partout cette fois-ci";

    } else if ($nom !== LEBONLOGIN or $password !== LEBONPASS) {
        header("Location:reject.php"); //redirige automatiquement l'user vers la page accueil.php

    } else if ($nom == LEBONLOGIN and $password == LEBONPASS) {
        session_start();
        $_SESSION["CONNECT"] = "OK";
        $_SESSION["nom"] = LEBONLOGIN;
        $_SESSION["pasword"] = LEBONPASS;
        header("Location:accueil.php"); //redirige automatiquement l'user vers la page accueil.php
    } 
}
//include "session.php"; 
//$_afaire = DISCONNECT();


if (isset($_POST['link'])) {
    $link=$_POST['link'];
    if ($link == 'Deconnexion'){
        session_destroy();
        header("Location:login.php?error=vous+etes+deconnecte");
    }

}


// -- les tentatives --


 //if (!empty($_GET['nom']) and ($_GET['password'])) $html .= "Bonjour " . $_GET['nom'] . "vous pouvez vous connecter \n";
            //else
            //echo "Erreur";         


            
        // else if ($nom LEBONLOGIN) {
        //     echo "non";
        // } 
        
        // else if ($nom == LEBONLOGIN){
        //     header("Location:accueil.php"); //redirige automatiquement l'user vers la page accueil.php
        // }