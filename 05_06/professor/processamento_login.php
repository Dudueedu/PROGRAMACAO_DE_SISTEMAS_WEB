<?php
require_once 'conecta.php';//incluindo o arquivo conecta.php

//verificar os dados do formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Obter os dados do formulario
    $email = $_POST['email'];//name do login.php
    $senha = $_POST['senha'];//name do login.php

    //verificar se campos foram preenchidos
    if (!empty($email) && (!empty($senha))){
        //consultar o banco de dados
        $sql = "SELECT * FROM usuarios WHERE email='$email'";//escrevendo a consulta
        $result = $conn->query($sql);//executando a consulta

        if($result->num_rows === 1){//numero de linha identico a 1 - se o email existe
            $row = $result->fetch_assoc();//coloca em um vetor
            $password = $row['senha'];//nome do campo senha do banco de dados
            echo $password;//verifica se a senha esta correta

            if($senha === $password){
                //iniciar uma sessão
                session_start();
                $_SESSION['username'] = $email;
                $_SESSION['logged_in'] = true;

                //redirecionar para uma página restrita.php
                header('Location: restrita.php');
                exit();//sai desse arquivo
            } else{
                $error = 'Senha inválida';
            }
        } else{
            $error = 'Email nao encontrado';
        }
    
    }else{
        $error = 'Por favor, preencha todos os campos';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Login</title>
</head>
<body>
    <h1>LOGIN INVÁLIDO</h1>
    <?php if (isset($error)): ?>
        <p>
            <?php
                if ($error === 'Senha inválida') {
                    echo '<h2>' . $error . '</h2>';
                } elseif ($error === 'Email nao encontrado'){
                    echo '<h2>' . $error . '</h2>';
                } else {
                    echo $error;
                }
            ?>
        </p>
    <?php endif; ?>

    <?php
    //se a variavel error estiver definida, vou redirecionar para a pagina de login novamente
    if (isset($error)){
        header('Refresh: 3; URL=login.php');//vai abrir o login.php
        echo "<p>Voce sera redirecionado para a pagina de login</p>";
        exit();
    }
    ?>
</body>
</html>