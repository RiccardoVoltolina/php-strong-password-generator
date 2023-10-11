<?php
header('Location: ./index.php');
session_start();
$_SESSION['color'];


?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["color"] . ".<br>";
?>

</body>
</html>