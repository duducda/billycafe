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
      <div id="conteudo" class="container">
         <?php
            $query = "SELECT * FROM produto ORDER BY id ASC";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
         ?>
         <div class="col-md-3">
            <form method="post">
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
               <img src="produtos\<?php echo $row["image"]; ?>" class="responsive" style="width: 200px" /><br />

               <h4 class="text-info"><?php echo $row["nome"]; ?></h4>

               <h4 class="text-danger">$ <?php echo $row["valor"]; ?></h4>

               <input type="text" name="quantity" value="1" class="form-control" />
               <input type="hidden" name="hidden_name" value="<?php echo $row["nome"]; ?>" />
               <input type="hidden" name="hidden_price" value="<?php echo $row["valor"]; ?>" />
               <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Adicionar carrinho" />
               <?php echo $row["image"]; ?>
            </div>
            </form>
         </div>
      <?php
      }
      ?>
    </body> 

</HTML>