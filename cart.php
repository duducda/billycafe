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
            <a href="cart.php?action=clear"><b>Clear Cart</b></a>
         </div>
         <table id ="cart" class="table table-bordered">
            <tr>
               <th width="40%">Item Name</th>
               <th width="10%">Quantity</th>
               <th width="20%">Price</th>
               <th width="15%">Total</th>
               <th width="5%">Action</th>
            </tr>
            <?php
               if(isset($_COOKIE["shopping_cart"]))
               {
               $total = 0;
               $cookie_data = stripslashes($_COOKIE['shopping_cart']);
               $cart_data = json_decode($cookie_data, true);
               foreach($cart_data as $keys => $values)
               {
            ?>
                  <tr>
                     <td><?php echo $values["item_name"]; ?></td>
                     <td><?php echo $values["item_quantity"]; ?></td>
                     <td>$ <?php echo $values["item_price"]; ?></td>
                     <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                     <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                  </tr>
                  <?php 
                     $total = $total + ($values["item_quantity"] * $values["item_price"]);
               }
            ?>
            <tr>
               <td colspan="3" align="right">Total</td>
               <td align="right">$ <?php echo number_format($total, 2); ?></td>
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
   </body>
</html>
