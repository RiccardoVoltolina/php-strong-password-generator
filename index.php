
<?php

include __DIR__. '/functions.php';

// Simuliamo il recupero della password (puoi sostituire con il tuo codice)
if (isset($_GET['password'])) {
    header('Location: ./session.php');

    session_start(); // Inizia la sessione

    // Salva la password nella sessione
    $_SESSION['password'] = randomPassword();
    
  }


?>

<!-- Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
-->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
</head>
<body>
    <h1>Password generator:</h1>
    <form action="./index.php" method="GET">
        <input type="text" name="password" id="password" placeholder="aggiungi caratteri">
        <button type="submit">invia</button>
    </form>


</body>
</html>




<!-- 
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->