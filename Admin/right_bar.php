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
                <div class="container-fluid m-5 ">
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Adds Title</label>
                            <div class="col-sm-9">
                            <input type="text" name = "ads_title" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Ads Image</label>
                            <div class="col-sm-9">
                            <input type="file"  name = "ads_image" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Ads Text</label>
                            <div class="form-floating">
                                
                                <textarea class="form-control w-75" name="ads_content" placeholder="Text here" id="floatingTextarea2" style="height: 100px">
                            
                                </textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        <div class="start-date">
                            <label for="start_date">
                                Starting Date
                            </label>
                            <input type="date" name="start_date" id="start_date" required class = " form-control w-75 mb-3 mt-3">
                        </div>

                        <div class="end-date">
                            <label for="end_date">
                                Ending Date
                            </label>
                            <input type="date" name="end_date" id="end_date" required class = " form-control w-75 mb-3 mt-3">
                        </div>
                        

                        <label for="position"  class="col-12 col-form-label mb-3">Status</label>
                        <select class="form-select w-75 mb-5" name = "ads_status" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <option value="Publish">Publish</option>
                            <option value="Draft">Draft</option>
                        </select>

                        <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "add_ads">Add Post</button>
                    </form>
                    <?php 
                    if(isset($_POST['add_ads'])){
                        $ads_title = $_POST['ads_title'];
                        $ads_status = $_POST['ads_status'];
                        $ads_start_time = $_POST['start_date'];
                        $ads_end_time = $_POST['end_date'];
                        $ads_image = $_FILES['ads_image']['name'];
                        $ads_image_temp = $_FILES['ads_image']['tmp_name'];
                        $ads_content = $_POST['ads_content'];
                        move_uploaded_file($ads_image_temp, "../postImage/$ads_image" );

                        $add_ads_query = "INSERT INTO ads ( ads_title, ads_image, ads_text, ads_start_time, adds_end_time, status)";
                        $add_ads_query .="  VALUES ( '$ads_title', '$ads_image', '$ads_content', '$ads_start_time', '$ads_end_time', '$ads_status')";
                        $add_ads_res = mysqli_query($connection, $add_ads_query);
                        if($add_ads_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Ads Added</p>
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