<?php 

$connect = new PDO("mysql:host=localhost;dbname=billy", "root", "");

$message = '';

if(isset($_POST["adicionar"])){
   if(isset($_COOKIE["carrinho"])){  
      $cookie_data = stripslashes($_COOKIE['carrinho']);

      $cart_data = json_decode($cookie_data, true);
   }
   else{
      $cart_data = array();
   }

   $item_id_list = array_column($cart_data, 'item_id');

   if(in_array($_POST["hidden_id"], $item_id_list))  {
      foreach($cart_data as $keys => $values){
         if($cart_data[$keys]["item_id"] == $_POST["hidden_id"]){
            $cart_data[$keys]["item_quantidade"] = $cart_data[$keys]["item_quantidade"] + $_POST["quantidade"];
         }
      }
   }
   else{
      $item_array = array(
         'item_id'   => $_POST["hidden_id"],
         'item_nome'   => $_POST["hidden_nome"],
         'item_valor'  => $_POST["hidden_valor"],
         'item_quantidade'  => $_POST["quantidade"]
      );
      $cart_data[] = $item_array;
   }

   $item_data = json_encode($cart_data);
   setcookie('carrinho', $item_data, time() + (86400 * 30));
   header("location:cart.php?success=1");
}

if(isset($_GET["action"])){
   if($_GET["action"] == "delete"){
      $cookie_data = stripslashes($_COOKIE['carrinho']);
      $cart_data = json_decode($cookie_data, true);
      foreach($cart_data as $keys => $values){
         if($cart_data[$keys]['item_id'] == $_GET["id"]){
            unset($cart_data[$keys]);
            $item_data = json_encode($cart_data);
            setcookie("carrinho", $item_data, time() + (86400 * 30));
            header("location:cart.php?remove=1");
         }
      }
   }
   if($_GET["action"] == "clear"){
      setcookie("carrinho", "", time() - 3600);
      header("location:cart.php?clearall=1");
   }

   if($_GET["action"] == "comprar"){
      if(isset($_SESSION['cliente'])){
         echo ($_COOKIE['carrinho']);
      }
      else{

      }
   }
}

if(isset($_GET["success"])){
   $message = '
   <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Item adicionado ao carrinho
   </div>
 ';
}

if(isset($_GET["remove"])){
   $message = '
   <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Item removido do carrinho
   </div>
      ';
}
if(isset($_GET["clearall"])){
   $message = '
   <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Seu carrinho foi esvaziado
   </div>
   ';
}
?>
