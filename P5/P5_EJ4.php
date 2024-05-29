<?php
session_start();
if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
   }else{
    $_SESSION["contador"]++;
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
<?php
echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
?>
<br>
<form action="" method="post"><input type="submit" name="reiniciar" value="Reiniciar"></form>

<?php
if(isset($_POST["reiniciar"])){
    $_SESSION["contador"] = 1;
}
?>
</body>
</html>