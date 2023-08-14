<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="recebe.php" method = "POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>