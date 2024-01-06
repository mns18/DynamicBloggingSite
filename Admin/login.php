<?php include("../include/connection.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body class = " bg-black">
    <div class="content">
        <div class = "position-absolute top-50 start-50 translate-middle" style="width:300px; height: 350Px;">
            <div class="card bg-secondary bg-opacity-50 border-danger-subtle shadow-sm">
                <div class="card-title border-bottom border-danger-subtle" >
                    <h3 class="d-block text-center">Login</h3>
                </div>
                <div class="card-body p-2">
                    <form action="" class = " form-group p-2"method = "POST">
                    <label for="" class = "text-white">Email</label>
                    <input type="email" name="admin_email" class=" form-control mt-2 mb-4" id="" required>
                    <label for="" class = "text-white">Password</label>
                    <input type="password" name="admin_pass" class=" form-control mt-2 mb-4" id="" required>

                    <button type="submit" class="btn btn-primary " name = "admin_login">Login</button>
                    </form>

                </div>
                <div class="card-footer border-top border-danger-subtle"><small class = "text-center text-warning ">This login page only for workers</small></div>
            </div>
        </div>
    </div>
    <?php 
        if(isset($_POST['admin_login'])){
            $input_email = $_POST['admin_email'];
            $input_password = $_POST['admin_pass'];
            echo $input_email, $input_password;
            $admin_mail_query = "SELECT * FROM stuff WHERE stuff_email = '$input_email'";
            $admin_mail_res = mysqli_query($connection, $admin_mail_query);
            if(mysqli_num_rows($admin_mail_res) > 0){
                $admin = mysqli_fetch_assoc($admin_mail_res);
                $admin_pass = $admin['stuff_password'];
                if($input_password == $admin_pass){
                    header("Location: index.php");
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
            }else{
                ?>
                    <div class="alert bg-danger top-0 position-absolute z-3 ">
                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                            onclick="this.parentElement.style.display='none';">&times;</span>
                         <strong class=" text-white ">Incorrect Password</strong>
                         <p class=" text-white ">Your password is incorrect please input your won password..</p>
                    </div>
                <?php
            }
        }
    ?>
</body>
</html>