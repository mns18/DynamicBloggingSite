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

        <div class='col-9 border-left' style="height: 100vh; overflow-y: scroll">
            <main id='main_panel' class="text-white">
                <div class="delete p-5">
                    <a href="delete_slide.php" class = "btn btn-danger float-end"> Delete</a>
                    <div class="float-start w-25">
                        <form action="" method = "POST">
                            <select name="slide_number" class=" form-control" id="">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="0">No slide</option>
                            </select>
                            <button class="btn btn-primary" type="submit" name = "set_number">Set</button>
                        </form>
                        <?php 
                        if(isset($_POST['set_number'])){

                            $new_count = $_POST['slide_number'];
                            $num_update_query = "UPDATE slides SET slide_amount = $new_count WHERE slide_id = 1 ";
                            $num_update_res = mysqli_query($connection, $num_update_query);
                            if($num_update_res){
                                header("Location: slide.php");
                            }
                        }
                            
                           
                        ?>
                    </div>
                </div>
                <div class="container-fluid m-5 ">
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Slide Title</label>
                            <div class="col-sm-9">
                            <input type="text" name = "slide_title" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Slide Image</label>
                            <div class="col-sm-9">
                            <input type="file"  name = "slide_image" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Slide Text</label>
                            <div class="form-floating">
                                
                                <textarea class="form-control w-75" name="slide_text" placeholder="Text here" id="floatingTextarea2" style="height: 100px">
                            
                                </textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>

                        </div>

                        <label for="position"  class="col-12 col-form-label mb-3">Where you Want to add</label>
                        <select class="form-select w-75 mb-5" name = "select_slide" aria-label="Default select example" id="position">
                            <option value ="1">Slide One</option>
                            <option value="2">Slide Two</option>
                            <option value="3">Slide Three</option>
                        </select>
                        

                        

                        <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "add_slide">Add Post</button>
                    </form>
                    <?php 
                    if(isset($_POST['add_slide'])){
                        $slide_title = $_POST['slide_title'];
                        
                    
                        $slide_image = $_FILES['slide_image']['name'];
                        $slide_image_temp = $_FILES['slide_image']['tmp_name'];
                        $slide_text = $_POST['slide_text'];
                        $slide_for = $_POST['select_slide'];
                        move_uploaded_file($slide_image_temp, "../postImage/$slide_image" );

                        $add_slide_query = "INSERT INTO main_slide(slide_title, slide_imge, slide_text, slide_for)";
                        $add_slide_query .="  VALUES ('$slide_title', '$slide_image', '$slide_text', $slide_for)";
                        $add_slide_res = mysqli_query($connection, $add_slide_query);
                        if($add_slide_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Post Added</p>
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