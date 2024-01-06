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
                <form class = "p-5"action="" method = "POST">
                    <div class="select-slide w-75">
                        <label for="select_slide">Select Here for Delete</label>
                        <select class=" form-control mb-2 mt-2"  name="select_slide" id="select_slide">
                            <option selected> Select From here</option>
                            <option value="1">Slide One</option>
                            <option value="2">Slide Tow</option>
                            <option value="3">Slide Three</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="set_slide">Set Slide</button>
                </form>
                 <?php 
                    if(isset($_POST['set_slide'])){
                        $select_slide = $_POST['select_slide'];
                        header("Location: delete_slide.php?slide_id=$select_slide");
                    }
                 ?>

                 <?php 
                    if(isset($_GET['slide_id'])){
                        $slide_id = $_GET['slide_id']; 
                        $select_slide_query = "SELECT * FROM main_slide WHERE slide_for = $slide_id";
                        $select_slide_res = mysqli_query($connection, $select_slide_query);
                        if(mysqli_num_rows($select_slide_res) > 0){
                            ?><form  class="p-5" action="" method = "POST">

                                <div class = "select_component">
                                    <label for="select_component">Select Page of the slide</label>
                                    <select class=" form-control w-75 mt-2 mb-2" name="select_component" id="select_component">
                                        <option selected> Select From here</option>
                                        <?php 
                                            while($slide_page = mysqli_fetch_assoc($select_slide_res)){
                                                $slide_page_id = $slide_page['count'];
                                                $slide_page_title = $slide_page['slide_title'];
                                                echo"<option value='$slide_page_id'>$slide_page_title</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <button class="btn btn-danger" type="submit" name = "select_page">Delete</button>
                            </form>
                                
                            <?php
                            
                        }else{
                            echo "<h1 class = 'text-white'>There is nothing for delete </h1>";
                        }
                    }
                 ?>

                 <?php 
                    if(isset($_POST['select_page'])){
                        $select_page_id = $_POST['select_component'];
                        $delete_query = "DELETE FROM main_slide WHERE count = $select_page_id";
                        $delete_res = mysqli_query($connection, $delete_query);
                        if($delete_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Deleted complete!</p>
                                    </div>
                            <?php

                        }else{
                            ?>
                                <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Created Problem!</strong>
                                        <p class=" text-white ">Some how it not removed please try again..</p>
                                    </div>
                            <?php
                        }
                    }
                 ?>
            </main>

        </div>
    </main>
</div>
</body>
</html>