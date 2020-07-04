<HTML>
    <head>
        <title>Café do Billy</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    </head>
    
    <body>
        <div class="container-fluid" id="menu">
            <button type="button" class="btn btn-primary" id="botao">Primary</button>
            <button type="button" class="btn btn-secondary" id="botao">Secondary</button>
            <button type="button" class="btn btn-success" id="botao">Success</button>
            <button type="button" class="btn btn-danger" id="botao">Danger</button>
            <button type="button" class="btn btn-warning" id="botao">Warning</button>
        </div>
        <content>
            <header>
                <link rel = "stylesheet" type = "text/css" href = "index.css"/>
                    <h1>Café do Billy</h1>
                </header>
            <div class="card-columns" id="produtos">
                <div class="col-md"><?php include 'card.php'; ?></div>
                <div class="col"><?php include 'card.php'; ?></div>
                <div class="col"><?php include 'card.php'; ?></div>
            </div>

        </content>
    </body> 

</HTML>