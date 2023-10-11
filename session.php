<?php
session_start(); // Assicurati di iniziare la sessione

if(isset($_SESSION['password'])){
    // Recupera la password dalla sessione
    $password = $_SESSION['password'];
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $password ?></h1>
</body>
</html>
