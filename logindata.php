<?php
    SESSION_START();

    $host = 'localhost';
    $user = 'root';
    $senhaSQL = '';
    $db = "billy";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senhaSQL, $db);

    //Coleta dos dados do formulário
    $senha = $_GET['senha'];
    $usuario = $_GET['usuario'];

    //Query para a database
    $sql = "SELECT senha FROM cliente WHERE usuario = '$usuario'";
    $result = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($result);

    if($dados['senha'] != NULL){
        if($dados['senha'] == $senha){
            $sql = "SELECT nome FROM cliente WHERE usuario = '$usuario'";
            $result = mysqli_query($connect, $sql);
            $nomecliente = mysqli_fetch_array($result);
            $_SESSION['cliente'] = $nomecliente['nome'];
            header('Location: index.php'); 
        }
        else{
            echo "Usuario ou senho incorretos";
        }
    }
    else{
        echo "Usuario ou senho incorretos";
    }
?>
