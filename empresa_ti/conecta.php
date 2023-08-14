<?php
    $host = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'empresadeti';

    $conn = new mysqli($host,$username,$password,$database);

    if($conn -> connect_error){
        die('erro na conexão com banco de dados'. $conn->connect_error);
    }
    echo 'conexão bem sucedida';
?>