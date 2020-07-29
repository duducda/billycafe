<?php
    //Conexão com o banco de dados
    $connect = mysqli_connect('localhost', 'root', '', 'billy');

    //Coleta dos dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];


    //Query para a database
    $sql = "INSERT INTO cliente (nome, email, username, senha, endereco, cep) VALUES ('$nome','$email', '$usuario', '$senha','$endereco', '$cep')";
    $result = mysqli_query($connect, $sql);

    echo "Cadastro realizado com sucesso"
?>