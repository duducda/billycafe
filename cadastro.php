<HTML>
    <head>
        <title>Café do Billy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <?php include 'header.php'; ?>

        <div class = 'container' id = "formcadastro">
            <center>
                <h2>Faça seu cadastro</h2>
                <form method="GET" action="novocliente.php">
                    <div class="container">
                        <div style="display: flex; justify-content: space-between">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control form-control-sm" name = "nome" >
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="text" class="form-control form-control-sm" name = "email">
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between">
                            <div class="form-group">
                                <label for="usuario">Usuário:</label>
                                <input type="text" class="form-control form-control-sm" name = "usuario">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control form-control-sm" name = "senha">
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between">
                            <div class="form-group">
                                <label for="cep">CEP:</label>
                                <input type="text" class="form-control form-control-sm" name = "cep">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control form-control-sm" name = "endereco">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-light">Cadastrar</button>
                    <div> 
                </form>
            </center>
        </div>
    </body>
</HTML>