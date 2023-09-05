<?php
require ("./validation.php");
session_start();

function CONNECT() {
    if (isset($_SESSION["CONNECT"])) {
        if ($_SESSION["CONNECT"] == "OK"){
            return True;
        }
    }
    return False;
}

?>