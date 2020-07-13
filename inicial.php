<HTML>
    <head>
        <title>Café do Billy</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <header class = "container-fluid">
            <link rel = "stylesheet" type = "text/css" href = "index.css"/>
            <h1>Café do Billy</h1>
            <div id="menu">
                <button type="button" class="btn btn-primary" id="botao">Primary</button>
                <button type="button" class="btn btn-secondary" id="botao">Secondary</button>
                <button type="button" class="btn btn-success" id="botao">Success</button>
                <button type="button" class="btn btn-danger" id="botao">Danger</button>
                <button type="button" class="btn btn-warning" id="botao">Warning</button>
            </div>
        </header>

        <main>
            <div class="card-columns">
                <?php include 'card.php'; ?>
                <?php include 'card.php'; ?>
                <?php include 'card.php'; ?>
                <?php include 'card.php'; ?>
                <?php include 'card.php'; ?>
            </div>
        </main>
    </body> 

</HTML>