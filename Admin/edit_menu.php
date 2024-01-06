<?php include("../include/connection.php");?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style = "background-color: black" class="h-100">
<div id="all" class='container-fluid'>
    <header>
        <div class = 'bg-black' style="height: 100px ">
            <div class='title'>
                <h2>Admin Panel</h2>
            </div>
            <div class='menu float-end'>
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../User/icon/profile_icon.png" class="rounded-circle" >
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class = 'all-content row border-top' style='background-color: #202926'>
        <div class='col-3 bg-secondary' style="height: 100vh; overflow-y: scroll" >
        <?php include("include/left_bar.php"); ?>

        </div>

        <div class='col-9 border-left h-100 overflow-y-scroll'>
            <main id='main_panel' class="text-white" style="height: 100vh; overflow-y: scroll overflow-hidden">
                <div class="container-fluid m-5 ">
                    <form action="" method="POST">
                        
                        <div class="mb-3 row">
                            <?php 
                                if(isset($_GET['cat_id'])){
                                    $cat_id = $_GET['cat_id'];
                                    $menu_name_query  = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                    $menu_name_res = mysqli_query($connection, $menu_name_query);
                                    $menu_name_component = mysqli_fetch_assoc($menu_name_res);
                                    $menu_nm = $menu_name_component['cat_title'];
                                    echo "
                                    <label for='tagName' class='col-12 col-form-label mb-3'>Tag Name</label>
                                    <div class='col-sm-9'>
                                        <input type='text' value = '$menu_nm' name = 'menu_name' class='form-control' id='tagName' required>
                                    </div>
                                    ";
                                    
                                }
                                 
                            ?>
                            
                        </div>
                        <label for="position"  class="col-12 col-form-label mb-3">Select Position</label>
                        <select class="form-select w-75 mb-2" name = "menu_p_id" aria-label="Default select example" id="position">
                        <option selected>Open this select menu</option>
                        <option value = "0">Top</option>
                        <?php
                                $menu_query = "SELECT * FROM categories WHERE cat_status = 'publish'";
                                $menu_res = mysqli_query($connection, $menu_query);
                                if(mysqli_num_rows($menu_res) >0){
                                    while($menu = mysqli_fetch_assoc($menu_res)){
                                        $menu_id = $menu['cat_id'];
                                        $menu_name = $menu['cat_title'];
                                        echo "<option value='$menu_id'>$menu_name</option>";
                                    }
                                }
                            ?>
                            
                            
                            
                        </select>

                        <label for="position"  class="col-12 col-form-label mb-3">Status</label>
                        <select class="form-select w-75 mb-5" name = "menu_status" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <option value="publish">publish</option>
                            <option value="draft">Draft</option>
                        </select>

                        <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "edit_menu">Update Menu</button>
                    </form>
                    <?php 
                    if(isset($_POST['edit_menu'])){
                        $cat_id = $_GET['cat_id'];
                        $menu_name = $_POST['menu_name'];
                        $menu_position = $_POST['menu_p_id'];
                        $menu_status = $_POST['menu_status'];

                        $add_menu_query = "UPDATE categories SET cat_title = '$menu_name', cat_p_id = $menu_position, cat_status = '$menu_status' WHERE cat_id = $cat_id ";
                        $add_menu_res = mysqli_query($connection, $add_menu_query);
                        if($add_menu_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Menu Update Successfully</p>
                                    </div>
                            <?php
                            

                        }else{
                            ?>
                                <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Created Problem</strong>
                                        <p class=" text-white ">Some how it not created please try again..</p>
                                    </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </main>

        </div>
    </main>
</div>
</body>
</html>