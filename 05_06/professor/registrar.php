<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Login</title>
</head>
<body>
    <h2>Registrar Login</h2>
    <form method="post" action="processamento_registro.php">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Registrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>