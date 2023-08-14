<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados recebidos</h1>
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        echo "Nome: $nome <br>";
        echo "E-mail: $email";
    ?>


</body>
</html>