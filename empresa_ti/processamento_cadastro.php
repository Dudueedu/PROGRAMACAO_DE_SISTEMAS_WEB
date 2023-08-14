<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['name'];
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];
        $tecnologias = $_POST['tecnologias'];


        if(!empty($email) && (!empty($senha))){
            require_once 'conecta.php';

            $sql = "SELECT * FROM funcionarios WHERE email='$email'";
            $result = $conn->query($sql);

            if($result->num_rows === 1){
                header("Location: esqueci_senha.php");
                exit();
            }
            $sql = "insert into funcionarios (email,senha,nome,cargo,salario,tecnologias) values('$email','$senha','$nome','$cargo','$salario','$tecnologias')";
            if($conn->query($sql)=== TRUE){
                echo "registro realizado com sucesso";
                header('Refresh: 3; URL=login.php');
                echo "<p> voce sera redirecionado para a pagina de login</p>";
                exit();
            }else{
                echo "Erro ao cadastrar" . $conn->error;
            }
            $conn->close();
        }else{
            header("Location: cadastro.php");
            exit();
        }
    }

?>