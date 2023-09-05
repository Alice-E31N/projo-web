<?php

require_once("compte-classe.php");
require_once("compteDAO-classe.php");

$compte=new compte(0,"toto","azerty");
$compteDAOobj=new compteDAO($compte);

if($compteDAOobj->exist()){


}else {

    
}

