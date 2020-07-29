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
                <h2>Faça seu login</h2>
                <form action="/action_page.php">
                    <label for="usuario">Usuário:</label>
                    <input type="text" class="form-control" placeholder="Usuário" name="usuario" required>
                    <label for="senha">Senha:</label>
                    <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                <button type="submit" class="btn btn-light" style = "margin-top: 6px">Entrar</button>
                <div class="container">
                    <span class="psw">Não possui um <a href="cadastro.php">cadastro?</a></span>
                </div>
                </form> 
            </center>
        </div>


    </body>



</HTML>


