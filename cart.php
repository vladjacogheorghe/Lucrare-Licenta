<?php 
include('includes/connect.php');
include('functions/common_function.php');

?> 
 <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ecommerce Website-Cart Details</title>
      <!--bootstrap-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">

      <!--font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="style.css">
      <style>
        .cart_img {
         width:50px;
         height:50px;
         object-fit:contain;
          }
      </style>

  </head>
  <body>
      <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Desolate Moors Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
        </li> 
      </ul>
    </div>
  </nav>

  <!--calling cart function -->
  <?php
  cart();
  
  ?>

  <!--second child-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
  </nav>

  <!--third child-->
  <div class="div bg-light">
    <h3 class="text-center">Desolate Moors Store</h3>
    <p class="text-center">Desolate Moors Official Online Shop</p>
  </div>

</div>

<!--fourth child-table-->
<div class="container-center">
    <div class="row">
        <form action="" method="post">
        <table class="table table-bordered text-center">

                <!--php pt partea dinamica-->
                <?php
                    global $con;
                    $get_ip_add = getIPAddress(); //in functie de ce user, de aia cu ip
                    $total_price=0;
                    $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
                    $result=mysqli_query($con, $cart_query);
                    $result_count=mysqli_num_rows($result);
                    while($row=mysqli_fetch_array($result)){
                      $product_id=$row['product_id'];
                      $select_products="Select * from `products` where product_id='$product_id'";
                      $result_products=mysqli_query($con, $select_products);
                      if($result_count>0){
                        echo" 
                        <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th colspan='2'>Operations</th>
                        </tr>
                       </thead>
                        <tbody>";

                      while($row_product_price=mysqli_fetch_array($result_products)){
                        $product_price=array($row_product_price['product_price']); //acessuim toate preturile
                        $price_table=$row_product_price['product_price'];
                        $product_title=$row_product_price['product_title'];
                        $product_image1=$row_product_price['product_image1'];
                        $product_values=array_sum($product_price); //le adunam pe toate
                        $total_price+=$product_values;
                  
                ?>
                <tr>
                    <td><?php echo $product_title?></td>
                    <td><img class="mw-10" src="./admin_area/product_images/<?php echo $product_image1?>" alt="cart_img"></td>
                    <td><input type="text" name="qty" class="form-input w-50"></td>
                    <?php
                     $get_ip_add = getIPAddress();
                     if(isset($_POST['update_cart'])){
                        $quantities=$_POST['qty'];
                        $update_cart="update `cart_details` set quantity=$quantities where ip_address='$get_ip_add'";
                        $result_products_quantity=mysqli_query($con, $update_cart);
                        $total_price=$total_price*$quantities;
                     }

                    ?>
                    <td><?php echo $price_table?></td>
                    <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                    <td>
                    <input type="submit" value="Update cart" class="bg-light px-3 py-2 border-0 mx-3" name="update_cart">
                    <input type="submit" value="Remove" class="bg-light px-3 py-2 border-0 mx-3" name="remove_cart">
                  </td>
                </tr>
            <?php }}} 
            ?>

            </tbody>
        </table>
        <!--subtotal-->
        <div class="d-flex mb-5">
          <?php
          
          ?>
            <h4 class="px-3">Subtotal:<strong class="text-dark"><?php echo $total_price?> lei</strong></h4>
            <button class="bg-light p-3 py-2 border-0 mx-3 text-dark"><a href="index.php" class="text-dark">Continue Shopping</a></button>
            <button class="bg-light p-3 py-2 border-0 text-decoration-none"><a href="./users_area/checkout.php" class="text=light text-decoration-none">Checkout</a></button>
        
        </div>
    </div>
</div>
</form>

<!--function to remove item-->
<?php
function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){ 
            foreach($_POST['removeitem'] as $remove_id){
            echo $remove_id;
            $delete_query="Delete from `cart_details` where product_id=$remove_id";
            $run_delete=mysqli_query($con, $delete_query);
            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }
    }
}
echo $remove_item=remove_cart_item();

?>

  <!--include footer-->  
  <?php include("./includes/footer.php")?>
      </div>

<!--bootstrap js link-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
  </body>
  </html>