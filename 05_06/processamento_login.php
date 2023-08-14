<?php
    require_once 'conecta.php'; //inclui arquivo 

    //verificar os dados do formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //obter os dados
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //verificar se foram, preenchidos
        if(!empty($email) && (!empty($senha))){
            $sql = "SELECT * FROM usuarios WHERE email='$email'";
            $result = $conn->query($sql);

            if($result->num_rows === 1){
                    $row = $result->fetch_assoc(); //coloca em vetor
                    $password = $row['senha'];
                    echo $password;

                    if($senha === $password){
                        //iniciar uma sessão
                        session_start();
                        $_SESSION['usuarios'] = $email;
                        $_SESSION['logged_in'] = true;

                        //redirecionar uma pagina restrita

                        header('Location: restrita.php');
                        exit();
                    }else{
                        $error = 'Senha invalida';
                    }
            }else{
                $senha = 'Email não encontrado';
            }
        }else{
            $error = 'Por favor, preencha os campos';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN INVALIDO</h1>
    <?php if(isset($error)): ?>

    <p>
        <?php
        if($error === 'Senha invalida'){
            echo '<h2>' . $error . '</h2>';
        } elseif($error === 'Email não encontrado'){
            echo '<h2>' . $error . '</h2>';
        }else{
            echo $error;
        }
        ?>
    </p>
    <?php endif; ?>

    <?php 
        if(isset($error)){
            header('Refresh: 3; URL=login.php');
            echo '<p> Voce sera redirecionado para o login </p>';
            exit();
        }
    ?>

</body>
</html>