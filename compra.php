<?php
    $host = 'localhost';
    $user = 'root';
    $senhaSQL = '';
    $db = "billy";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senhaSQL, $db);

    //Coleta dos dados do formulário
    $cliente = $_GET['cliente'];
    $total = $_GET['total'];
    $itens = $_COOKIE['carrinho'];

    //Query para a database

    $sql = "INSERT INTO compra (cliente, total, itens) VALUES ('$cliente','$total', '$itens')";
    $result = mysqli_query($connect, $sql);

    setcookie("carrinho", "", time() - 3600);
    header('Location: endcomp.php'); 
?>