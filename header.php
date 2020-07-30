<?php session_start() ?>
<HTML>
    <header class = "container-fluid"  style="display: flex;flex-direction: collumn; justify-content:space-evenly; align-items: baseline;">
        <link rel = "stylesheet" type = "text/css" href = "style.css"/>
        <div class = "container" style="display: flex;flex-direction: row;" id = "menuloja">
            <a href="index.php" class="btn btn-light" id="botao" role="button">Produtos</a>
            <a href="cart.php" class="btn btn-light" id="botao"  role="button">Carrinho</a>
        </div>
        <div class = "container">
            <h1 style="text-align:baseline;font-size: 5em;">Café do Billy</h1>
        </div>
        <div class = "container" id="menulogin">
            <?php
                if(isset($_SESSION['cliente'])){
                ?>
                    <a href="logout.php"  id="botao" role="button" class="btn btn-danger">logout</a>
            <?php
                }
                else{
                ?>
                    <a href="login.php"  id="botao" role="button" class="btn btn-primary" >Login</a>
                <?php
                }
                ?>         
        </div>               
    </header>
</HTML>

