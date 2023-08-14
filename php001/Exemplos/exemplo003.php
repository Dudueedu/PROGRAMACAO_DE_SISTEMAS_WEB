<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste php</title>
</head>
<body>
    
    <?php

        $idade = 17;

        if ($idade >= 18){
            echo "Você é de maior <br>";
        }
        else{
            echo "Você é de menor <br>";
        }
        for($i = 1; $i <=5; $i++){
            echo "O valor de i: $i <br>";
        }

    ?>

</body>
</html>