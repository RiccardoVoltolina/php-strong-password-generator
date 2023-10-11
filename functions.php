
<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->

<?php
session_start();
$_SESSION['color'];



if (isset($_GET['password'])) {
    $randomText = $_GET['password']; 
  }


function randomPassword() {
    
    if (isset($_GET['password'])) {
        $randomText = strlen($_GET['password']); 
        if ($randomText < 8) {
            $errorMessage = 'inserisci un testo di almeno 8 caratteri';
            return $errorMessage;

        } else {
            
            $randomText = $_GET['password'];
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890./%&!$£';
            $pass = array(); //dico che pass è uguale a un array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < strlen($randomText); $i++) {
                $n = rand(0, $alphaLength);//genero un numero integrale casuale
                $pass[] = $alphabet[$n];
            }
            return 'la tua password randomica è:' . implode($pass); //unisco gli elementi di un array in una stringa
        }

    }
      }

?>
