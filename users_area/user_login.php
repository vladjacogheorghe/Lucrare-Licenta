<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

          <!--bootstrap-->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">

      <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-fluid m-3 ">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="lg-12 col-xl-6">
                <form action="" metho="post" enctype="multipart/form-data">
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" id="user_username" class="form-control" placeholder="Enter your username" autocomplete="off" required="required" name="user_username"/>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password"/>
                    </div>
                    <div class="text-center mt-4 pt-2">
                        <!-- <input type="submit" value="Login" class="bg-light py-2 px-3 border-0 mb-4" name="user_login"> -->
                        <button><a href="../index.php" class="nav-link text-dark bg-light my-1">Log In</a></button>
                        <p class="small fw-bold">Don't have an account?<a href="user_registration.php" class="text-danger"> Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>