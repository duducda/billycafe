<?php

    $host = 'localhost';
    $user = 'root';
    $senhaSQL = '';
    $db = "billy";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senhaSQL, $db);

    //Coleta dos dados do formulário
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];
    $cep = $_GET['cep'];
    $endereco = $_GET['endereco'];


    //Query para a database
    $sql = "INSERT INTO cliente (nome, email, usuario, senha, cep, endereco) VALUES ('$nome','$email', '$usuario', '$senha','$endereco', '$cep')";
    $result = mysqli_query($connect, $sql);

    echo "Cadastro realizado com sucesso"
?>