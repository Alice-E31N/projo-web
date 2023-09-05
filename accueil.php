<?php include "session.php"; 
$_connexion = CONNECT();
if ($_connexion == False) {
    header("Location:login.php");
}
?>

<html>
    <head><title>Page d'accueil</title></head>
    <body>
        <?php
            echo 'Bravo ' .$_SESSION['nom']. " vos login/mot de passe sont corrects" ?>

        <! -- commentaire, URL= http://localhost/pepouze-la-pelouse/accueil.php -->

        <p style="color:#42FF00;">Bienvenue sur votre page</p>  
        <IMG SRC="https://media0.giphy.com/media/111ebonMs90YLu/200.gif">

        

        <a href="controller-comptes.php"  style="color:#B90202;">Tu veux voir les autres comptes présents dans la bdd ?</p>

        <form method="post" action="validation.php">
            <input type="Submit" value="Se déconnecter" />
            <input style="display:none;" type="text" value="Deconnexion" name="link" />

        </form>

        
    </body>
</html>    
