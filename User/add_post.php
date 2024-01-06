<?php include("../include/connection.php");?>
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
<body  class="h-100">
<?php include("include/header.php")?>
<div id="all" class='container overflow-hidden'>
    
    <main class = 'all-content row border-top' style='background-color: #202926'>
        

        <div class='col-12 border-left' style="height: 100vh; overflow-y: scroll">
            <main id='main_panel' class="text-white">
                <div class="container-fluid m-5 ">
                    <form action="" method="POST" enctype="multipart/form-data">
                        
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Post title</label>
                            <div class="col-sm-9">
                            <input type="text" name = "post_title" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <label for="position"  class="col-12 col-form-label mb-3">Post Category</label>
                        <select class="form-select w-75 mb-5" name = "post_category" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <?php 
                                $category_query = "SELECT * FROM categories WHERE cat_status = 'publish'";
                                $category_res = mysqli_query($connection, $category_query);
                                if($category_res){
                                    while($category = mysqli_fetch_assoc($category_res)){
                                        $cat_id = $category['cat_id'];
                                        $cat_title = $category['cat_title'];
                                        echo "<option value='$cat_id'>$cat_title</option>";
                                    }
                                }
                                
                            ?>
                            
                            
                        </select>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Post Image</label>
                            <div class="col-sm-9">
                            <input type="file"  name = "post_image" class="form-control" id="tagName" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tagName" class="col-12 col-form-label mb-3">Post Content</label>
                            <div class="form-floating">
                                
                                <textarea class="form-control w-75" name="post_content" placeholder="Text here" id="floatingTextarea2" style="height: 100px">
                            
                                </textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>
                        </div>
                        

                        <label for="position"  class="col-12 col-form-label mb-3">Status</label>
                        <select class="form-select w-75 mb-5" name = "post_status" aria-label="Default select example" id="position">
                            <option selected>Open this select menu</option>
                            <option value="Pending">Publish</option>
                            <option value="Draft">Draft</option>
                        </select>

                        <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "add_post">Add Post</button>
                    </form>
                    <?php 
                    if(isset($_POST['add_post'])){
                        $post_title = $_POST['post_title'];
                        $post_category = $_POST['post_category'];
                        $post_status = $_POST['post_status'];
                        $post_image = $_FILES['post_image']['name'];
                        $post_image_temp = $_FILES['post_image']['tmp_name'];
                        $post_content = $_POST['post_content'];
                        $user_id = $_GET['user_id'];
                        move_uploaded_file($post_image_temp, "../postImage/$post_image" );

                        $add_post_query = "INSERT INTO posts ( post_category_id, post_title,  post_author_id, post_content, post_image, post_like, post_comment, post_status)";
                        $add_post_query .="  VALUES ($post_category, '$post_title', $user_id, '$post_content', '$post_image', 0, 0, '$post_status')";
                        $add_page_res = mysqli_query($connection, $add_post_query);
                        if($add_page_res){
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