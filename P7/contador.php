<?php
    setcookie("contador", 0, time() + (60 * 60 * 24 * 90));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P7 EJ2</title>
</head>
<body>
<?php
    $contador= $_COOKIE["contador"];
    if($contador == 0){
        echo "Bienvenido";
    }else{
        echo "Cantidad de veces visitada: $contador ";
    }
    $contador= $contador + 1;
    setcookie("contador", $contador, time() + (60 * 60 * 24 * 90));
?>
</body>
</html>