<?php
    

class compteDAO {
    public $compte;

    function __construct($compte) {
        $this->compte = $compte;

    }


    function exist() {
        $host = 'localhost';
    $dbname = 'bdd_compte';
    $username = 'root';
    $password = '';

       
  try{
        $pdo =new PDO('mysql:host=localhost;dbname=bdd_compte', $username, $password); 
  // récupérer tous les utilisateurs

  $stmt = $pdo->prepare("SELECT * FROM `bdd_comptes` where nom=? and password=?");
  $stmt->bindValue(1, $this->compte->username);
  $stmt->bindValue(2, $this->compte->password);

$stmt->execute();
if( $stmt->rowCount()==0){
    return False;

}else{
    return True;
}



   
  }catch (PDOException $e){
    echo $e->getMessage();
  }


    }
        

}



?>