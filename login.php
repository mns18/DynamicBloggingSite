<?php include("include/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <link rel="stylesheet" href="../../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/common-1.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;300;400&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="User/css/login.css"/>

</head>
    
    <body style="background-color: #8bd6bf;">
      <header id="header" style="background-color: #00acee;">
        <div class="header container">
        <div class="header-tl" style="display: block;width: 100%; min-height: 70px;">
            <div class="header-title" style="float: left;">
                <h1 class="">Awesome Blogging</h1>
                
            </div>
            <div style="float: right;">
                <div class="dropdown mt-4">
                    <button class="btn dropdown-toggle border-0 login-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle-o" style="font-size:30px"></i>
                    </button>
                    <ul class="dropdown-menu login-item">
                      <li><a class="dropdown-item " href="User/html/login.html">Login</a></li>
                      <li><a class="dropdown-item" href="User/html/createAccount.html">Create Account</a></li>
                    </ul>
                  </div>
            </div>
        </div>

        
           
            
            
            <div class=" row">
                <div class="col-md-3 d-sm-none">
                    <h2>Awesome Blogging</h2>
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Logo</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Course</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">jh</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tutorials</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bologs</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>

        </div>
        
    </header>



        
        <div class="login form-bg align-content-center">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-container">
                        <form class="form-horizontal" action="" method="POST" >
                            <h3 class="title">User Login</h3>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input class="form-control" type="email" name = "email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" name = "pass" type="password" placeholder="Password" required>
                            </div>
                            <span class="forgot-pass"><a href="#">Lost password?</a></span>
                            <button type="submit" class="btn signin" name = "user_login">Login</button>
                        </form>

                        <?php 
                            if(isset($_POST['user_login'])){
                                $try_user_mail = $_POST['email'];
                                $try_user_pass = $_POST['pass'];
                                $login_query = "SELECT * FROM users WHERE user_mail = '$try_user_mail'";
                                $login_res = mysqli_query($connection, $login_query);
                                
                                if(mysqli_num_rows($login_res) > 0){
                                    $user = mysqli_fetch_assoc($login_res);
                                    $user_pass = $user['user_password'];
                                    if($try_user_pass == $user_pass){
                                        
                                    }else{
                                        ?>
                                    <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Wrong Password!</strong>
                                        <p class=" text-white ">Your Password is incorrect please input your right password</p>
                                    </div>
                                    <?php
                                    }

                                }else{
                                    ?>
                                    <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Incorrect Email!</strong>
                                        <p class=" text-white ">Your Email is incorrect please input your right email or create new one..</p>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>