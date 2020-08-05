<?php include 'data.php'; ?>

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
      <div class="grid-container">
            <?php
               $query = "SELECT * FROM produto ORDER BY id ASC";
               $statement = $connect->prepare($query);
               $statement->execute();
               $result = $statement->fetchAll();
               foreach($result as $row)
               {
            ?>
            <div>
               <form method="post">
               <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; margin:60px" align="center">
                  <img src="produtos\<?php echo $row["image"]; ?>" class="responsive" style="width: 200px" /><br />

                  <h4 class="text-info"><?php echo $row["nome"]; ?></h4>

                  <h4 class="text-danger">R$ <?php echo $row["valor"]; ?></h4>
                  <input type="hidden" name="hidden_nome" value="<?php echo $row["nome"]; ?>" />
                  <input type="hidden" name="hidden_valor" value="<?php echo $row["valor"]; ?>" />
                  <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
                  <div style="display: flex;flex-direction: row; justify-content:space-between">
                     <input type="number" id="quantity" name="quantidade" min="1" max="16" size="3" value="1">
                     <input type="submit" name="adicionar" style="margin-top:5px;" class="btn btn-primary" value="Adicionar carrinho" />
                  </div>
               </div>
               </form>
            </div>
         <?php
         }
         ?>
      </div>
    </body> 

</HTML>
