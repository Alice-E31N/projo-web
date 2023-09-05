<?php
  $host = 'localhost';
  $dbname = 'bdd_compte';
  $username = 'root';
  $password = '';
    
  
  $dsn =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM `bdd_comptes`" ;
   
  try{
   $pdo = $dsn;
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
    else {
        header("Location:affiche-les-comptes.php");
    }
  }catch (PDOException $e){
    echo $e->getMessage();
  }

   
?>