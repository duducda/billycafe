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

        <div class = 'container' id = "formlogin">
            <center>
                <h1>Faça seu cadastro</h1>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" placeholder="Insira seu nome completo" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuário:</label>
                        <input type="text" class="form-control" placeholder="Insira seu nome de usuário" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" placeholder="Insira uma senha" name="senha" required>
                    </div>
                    <div class="form-group">
                        <label for="">CEP</label>
                        <input type="text" class="form-control" placeholder="Digite seu CEP" name="cep" required>
                    </div>
                    <div class="form-group">
                        <label for="">Endereço</label>
                        <input type="text" class="form-control" placeholder="Digite seu endereço" name="endereco" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form> 
            </center>
        </div>
    </body>
</HTML>