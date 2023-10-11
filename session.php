<?php
session_start(); // Assicurati di iniziare la sessione

if(isset($_SESSION['password'])){
    // Recupera la password dalla sessione
    $password = $_SESSION['password'];

    // Ora puoi visualizzare la password o eseguire altre operazioni con essa
    echo $password;
} 
?>
