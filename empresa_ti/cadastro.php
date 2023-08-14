<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./style/css/cadastro.css">
</head>
<body>
<main>
    <section>
        <form action="processamento_cadastro.php" method="POST">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required><br>

                <label for="name">Nome completo:</label>
                <input type="text" name="name" id="name" required><br>

                <label for="salario">Salario:</label>
                <input type="number" name="salario" id="salario" required><br>

                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo" required><br>

                <label for="tecnologias">Descreva abaixo suas tecnologias dominadas:</label>
                <textarea name="tecnologias" id="tecnologias" required></textarea><br>
        
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br>
        
                <input type="submit" value="Registrar" id="button">
                <input type="reset" value="Limpar" id="button">
            </form>
        
            <a href="login.php"> Login</a>
    </section>
</main>
</body>
</html>