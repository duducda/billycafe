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
                <h1>Faça seu login</h1>
                <form action="/action_page.php">
                        <label for="usuario">Usuário:</label>
                        <input type="text" class="form-control" placeholder="Usuário" name="usuario" required>
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                    <button type="submit" class="btn btn-primary" style = "margin-top: 1">Entrar</button>
                </form> 
            </center>
        </div>


    </body>



</HTML>