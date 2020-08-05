<?php include 'data.php'; ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Café do Billy</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <?php include 'header.php'; ?>
      <carrinho class='container'>
         <div style="clear:both"></div>
            <br />
            <h3>Carrinho</h3>
            <div class="table-responsive">
               <?php echo $message; ?>
            <div align="right">
            <a href="cart.php?action=clear"><b>Esvaziar carrinho</b></a>
         </div>
         <table id ="cart" class="table table-bordered">
            <tr>
               <th width="40%">Item</th>
               <th width="10%">Quantidade</th>
               <th width="20%">Preço</th>
               <th width="15%">Total</th>
            </tr>
            <?php
               if(isset($_COOKIE["carrinho"]))
               {
               $total = 0;
               $cookie_data = stripslashes($_COOKIE['carrinho']);
               $cart_data = json_decode($cookie_data, true);
               foreach($cart_data as $keys => $values)
               {
            ?>
                  <tr>
                     <td><?php echo $values["item_nome"]; ?></td>
                     <td><?php echo $values["item_quantidade"]; ?></td>
                     <td>R$ <?php echo $values["item_valor"]; ?></td>
                     <td>R$ <?php echo number_format($values["item_quantidade"] * $values["item_valor"], 2);?></td>
                     <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remover</span></a></td>
                  </tr>
                  <?php 
                     $total = $total + ($values["item_quantidade"] * $values["item_valor"]);
               }
            ?>
            <tr>
               <td colspan="3" align="right">Total</td>
               <td align="right">R$ <?php echo number_format($total, 2); ?></td>
               <td></td>
            </tr>
            <?php
               }
               else
               {
               echo '
               <tr>
                  <td colspan="5" align="center">Carrinho cazio</td>
               </tr>
               ';
            }
            ?>
         </table>
         <br/>
      </carrinho>
      <?php include 'modal.php'; ?>
      <form method="GET" action="compra.php">
         <input type="hidden" name="cliente" value="<?php echo $_SESSION['cliente']?>" />
         <input type="hidden" name="total" value="<?php echo $total;?>" />

         <?php
                if(isset($_SESSION['cliente'])){
                ?>
                    <button type="submit" class="btn btn-light">Comprar</button>
            <?php
                }
                else{
                ?>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalFalha">Comprar</button>
                <?php
                }
                ?>     
      </form>
   </body>
</html>
