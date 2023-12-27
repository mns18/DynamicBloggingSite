<?php include("include/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="../js/createAc.js" ></script>

    <link rel="stylesheet" href=User/css/createAccount.css">
</head>
<body>
    <header id="header" style="background-color: #00acee;">
        <div class="header container">
        <div class="header-tl" style="display: block;width: 100%; min-height: 70px;">
            <div class="header-title" style="float: left;">
                <h1 class="">Awesome Blogging</h1>
                
            </div>
            <div style="float: right;">
                <div class="dropdown mt-4">
                    <button class="btn dropdown-toggle border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle-o" style="font-size:30px"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="User/html/login.html">Login</a></li>
                      <li><a class="dropdown-item" href="#">Create Account</a></li>
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
                              <li class="nav-item">
                                <a class="nav-link" href="#">Movie</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Daily</a>
                              </li>  
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
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


    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="../icon/writing-blog-logo-content-logo-template_658057-29.avif" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Create an Account</h1>
                <p class="font-italic text-muted mb-0">After creating an account you will be able to like, comment, post request and other... . .</p>
                
            </div>

            
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="" method="POST">
                    <div class="row">

                       
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="firstName" type="text" name="first_name" placeholder="First Name" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa icon fa-user text-muted "></i>
                                </span>
                            </div>
                            <input id="lastName" type="text" name="last_name" placeholder="Last Name" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                        <div class="input-group col-lg-12 mb-4 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select id="countryCode" name="countryCode" style="max-width: 80px" class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted" required>
                                <option value="+880">+880</option>
                                <option value="+91">+91</option>
                                <option value="+1">+1</option>
                                <option value="+66">+66</option>
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number" class="form-control bg-white border-md border-left-0 pl-3"required>
                        </div>.



                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-black-tie text-muted"></i>
                                </span>
                            </div>
                            <select id="job" name="job_title" class="form-control custom-select bg-white border-left-0 border-md" required>
                                <option value="">Choose your job</option>
                                <option value="Designer">Designer</option>
                                <option value="Developer">Developer</option>
                                <option value="Manager">Manager</option>
                                <option value="Accountant">Accountant</option>
                            </select>
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0 p-3">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="text" name="passwordConfirmation" placeholder="Confirm Password" class="form-control bg-white border-left-0 border-md"required>
                        </div>

                     
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <input type="submit" class="btn btn-primary btn-block py-2 bg-primary" name = "create_account" value = "Create Your Account">
                        </div>


                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                            <div class="border-bottom w-100 ml-5"></div>
                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                            <div class="border-bottom w-100 mr-5"></div>
                        </div>


                        <div class="form-group col-lg-12 mx-auto">
                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">
                                <i class="fa fa-facebook-f mr-2"></i>
                                <span class="font-weight-bold">Continue with Facebook</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">
                                <i class="fa fa-twitter mr-2"></i>
                                <span class="font-weight-bold">Continue with Twitter</span>
                            </a>
                        </div>


                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="login.html" class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>


                <?php 
                    if(isset($_POST['create_account'])){
                        $user_first_name = $_POST['first_name'];
                        $user_last_name = $_POST['last_name'];
                        $user_email = $_POST['email'];
                        $user_countryCode = $_POST['countryCode'];
                        $user_job_title = $_POST['job_title'];
                        $user_password = $_POST['password'];
                        $user_pass_confirm = $_POST['passwordConfirmation'];

                        $check_query = "SELECT * FROM users WHERE user_mail = '$user_email'";
                        $check_query_res = mysqli_query($connection, $check_query);

                        if(mysqli_num_rows($check_query_res) < 1){
                            if($user_password == $user_pass_confirm){
                                $create_query = "INSERT INTO users (user_id, user_first_name, user_last_name, user_mail, user_password, user_job, user_country, user_image, user_position, user_status)";
                                $create_query .=" VALUES (NULL, '$user_first_name', '$user_first_name', '$user_email', '$user_pass_confirm', '$user_job_title', '$user_countryCode', '', 'user', 'De-active')";
                                $create_res = mysqli_query($connection, $create_query);
                                if($create_res){
                                    ?>
                                    <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Account Created</p>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="alert bg-danger top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Created Problem!</strong>
                                        <p class=" text-white ">Please Tray again for create a new account</p>
                                    </div>
                                    <?php
                                }
                            }else{
                                ?>
                                    <div class="alert bg-danger top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Problem!</strong>
                                        <p class=" text-white ">confirm password doesn't match with password</p>
                                    </div>
                                    <?php
                            }
                        }else{

                           ?>
                            <div class="alert bg-danger top-0 position-absolute z-3 ">
                                <span class="closebtn float-end " style = "font-size: 10; cursor: pointer;"onclick="this.parentElement.style.display='none';">&times;</span>
                                <strong class=" text-white ">Problem!</strong>
                                <p class=" text-white ">confirm password doesn't match with password</p>
                            </div>
                        <?php
                        }

                    }
                ?>
            </div>
        </div>
    </div>
















</body>
</html>
