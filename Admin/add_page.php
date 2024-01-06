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
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Page Title</label>
                            <div class="col-sm-9">
                            <input type="text" name = "page_title" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <label for="position"  class="col-12 col-form-label mb-3">Page Type</label>
                        <select class="form-select w-75 mb-5" name = "page_type" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <option value="Person">Person</option>
                            <option value="Other">Other</option>
                        </select>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Page Image</label>
                            <div class="col-sm-9">
                            <input type="file"  name = "page_image" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Page Content</label>
                            <div class="form-floating">
                                
                                <textarea class="form-control w-75" name="page_content" placeholder="Text here" id="floatingTextarea2" style="height: 100px">
                            
                                </textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        

                        <label for="position"  class="col-12 col-form-label mb-3">Status</label>
                        <select class="form-select w-75 mb-5" name = "page_status" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <option value="Publish">publish</option>
                            <option value="Draft">Draft</option>
                        </select>

                        <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "add_page">Add Menu</button>
                    </form>
                    <?php 
                    if(isset($_POST['add_page'])){
                        $page_name = $_POST['page_title'];
                        $page_type = $_POST['page_type'];
                        $page_status = $_POST['page_status'];
                        $page_image = $_FILES['page_image']['name'];
                        $page_image_temp = $_FILES['page_image']['tmp_name'];
                        $page_content = $_POST['page_content'];
                        move_uploaded_file($page_image_temp, "../postImage/$page_image" );

                        $add_page_query = "INSERT INTO pages ( page_title, page_type, page_image, page_content, page_status) VALUES ( '$page_name', '$page_type', '$page_image', '$page_content', '$page_status')";
                        $add_page_res = mysqli_query($connection, $add_page_query);
                        if($add_page_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Menu Added</p>
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