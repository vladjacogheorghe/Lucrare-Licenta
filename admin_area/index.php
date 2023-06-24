<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--bootstrap css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">

      <!--link font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="../style.css"> <!--cum folderul cu poze e inafara, punem .. in loc de un .-->
      <style>
        .admin_image{
         width: 100px;
         object-fit: contain;
         }
        </style>

</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--firs child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
           <div class="container-fluid">
            <img src="../images/logo.jpg" alt="" class="logo"> <!--cum folderul cu poze e inafara, punem .. in loc de un .-->
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-light">Welcome Vlad</a>
                    </li>
                </ul>


            </nav>
           </div> 
        </nav> <!--se termina first nav-->

        <!--second child-->
        <!-- <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>

        </div> -->

        <!--third child-->
        <div class="row">
            <div class="col md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/admin.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Vlad Gheorghe</p>
                </div>

                <div class="button text-center align-items-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-secondary my-1">Insert Products</a></button>
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button> -->
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-secondary my-1">Insert Categories</a></button>
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button> -->
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-secondary my-1">Insert Brands</a></button>
                    <button><a href="../index.php" class="nav-link text-light bg-secondary my-1">Access Shop</a></button>
                    <button><a href="../Licenta Visual Studio/Homepage.html" class="nav-link text-light bg-secondary my-1">Access Website</a></button>
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button> -->
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button> -->
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button> -->
                    <!-- <button><a href="" class="nav-link text-light bg-info my-1">Users list</a></button> -->
                    <!--<button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>-->
                </div>

            </div>
        </div>
        <!--fourth child-->
        <div class="container my-3">
            <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');} 

            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');} 
            ?>
        </div>



          <!--last child-->
          <?php include("../includes/footer.php")?>
      
    </div>
    

<!--bootstrap js link-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
</body>
</html>