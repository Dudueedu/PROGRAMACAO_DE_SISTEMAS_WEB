<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./style/css/login.css">
</head>
<body>
<main>
    <section>
        <form action="processamento_login.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required><br>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>

            <input type="submit" value="Acessar" id="button">
            <input type="reset" value="Limpar" id="button">
        </form>

        <a href="cadastro.php"> Registrar</a>
    </section>
</main>
</body>
</html>