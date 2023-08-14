<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    function soma($a, $b){
        return $a + $b;
    }

    function subtrai($x, $y){
        $resultado = $y - $x;
        return $resultado;
    }

    echo "A diferença entre 4 e 50 é: " . subtrai(4,50);
    echo "<br>";
    echo "A soma de 2 e 3 é: " . soma(2,3);
?>

</body>
</html>