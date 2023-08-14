<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        //recuperar dados do formulario
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        if (!empty($email) && (!empty($senha))){
            require_once "conecta.php";

            //verificar se o email está cadastrado
            $sql = "SELECT * FROM usuarios WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                //usuario já está cadastrado
                header("Location: esqueci_senha.php");
                exit();
            }

            //se o email nao esta cadastrado, preciso cadastrar
            $sql = "insert into usuarios (email,senha) values('$email','$senha')";
            if ($conn->query($sql) === TRUE){
                //Registro realizado com sucesso
                echo "Registro realizado com sucesso";
                header('Refresh: 3; URL=login.php');
                echo "<p>Você será redirecionado para página de login";
                exit();
            }else{
                //ocorreu um erro
                echo "Erro ao cadastrar" . $conn->error;
            }
            //fechar a conexao com o banco de dados
            $conn->close();
        }else{
            //se o formulario nao foi enviado
            header("Location: registrar.php");
            exit();
        }
    }
?>