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
      <title>Ecommerce Website</title>
      <!--bootstrap-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">

      <!--font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="style.css">

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
          <a class="nav-link" href="./Licenta Visual Studio/Contact.html">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price();?></a>
        </li>
    

      </ul>
      <form class="form-inline my-2 my-lg-0" action="" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-dark" name="search_data_product">
      </form>
    </div>
  </nav>

   <!--calling card function -->
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
          <a class="nav-link" href="./users_area/user_login.php">Login</a>
        </li>
    </ul>
  </nav>

  <!--third child-->
  <div class="div bg-light">
    <h3 class="text-center">Desolate Moors Store</h3>
    <p class="text-center">Desolate Moors Official Online Shop</p>
  </div>

  <!--fourth child-->
  <div class="row px-1">
    <div class="col-md-10">
      <!--products-->
      <div class="row"> <!--obiectele pe orizontala-->
      <!--fetching products-->
      <?php
      //call function
      search_product();
      get_unique_categories();
      get_unique_brands(); 
      ?>

<!--row end-->
</div>
<!--column end-->
</div>


    <div class="col-md-2 bg-secondary p-0">
      <!---side nav-->
            <!--categorii-->
            <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-light">
          <a href="#" class="nav-link text-dark"><h4>Categories</h4></a>
        </li>

        <!--asta ca sa mi afiseze langa ce am in baza la category-->
        <?php
        getcategories();
         ?>
      </ul>
      <!--Brands gen-->
      <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-light">
          <a href="#" class="nav-link text-dark"><h4>Delivery Brands</h4></a>
        </li>
        <!--asta ca sa mi afiseze langa ce am in baza la brand-->
        <?php
        getbrands();
        ?>
      </ul>

    </div>
  </div>



  <!--last child-->
  <!--include footer-->  
  <?php include("./includes/footer.php")?>
      </div>

<!--bootstrap js link-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
  </body>
  </html>