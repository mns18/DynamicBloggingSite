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
                    <?php 
                        if(isset($_GET['post_id'])){
                            $post_id = $_GET['post_id'];
                            $post_query = "SELECT * FROM posts WHERE post_id = $post_id";
                            $post_res = mysqli_query($connection, $post_query);
                            if(mysqli_num_rows($post_res) > 0){
                                $post = mysqli_fetch_assoc($post_res);
                                $post_category_id = $post['post_category_id'];
                                $post_title = $post['post_title'];
                                $post_status = $post['post_status'];
                                $post_image = $post['post_image'];
                                $post_content = $post['post_content'];
                                

                                ?>
                               
                               <form action="" method="POST" enctype="multipart/form-data">
                        
                                <div class="mb-3 row">
                                    <label for="tagName" class="col-12 col-form-label mb-3">Post title</label>
                                    <div class="col-sm-9">
                                    <input type="text" value = "<?php echo $post_title ?>" name = "post_title" class="form-control" id="tagName" required>
                                    </div>
                                </div>
                                <label for="position"  class="col-12 col-form-label mb-3">Post Category</label>
                                <select class="form-select w-75 mb-5" name = "post_category" aria-label="Default select example" id="position">
                                    
                                    <?php 
                                        $category_query = "SELECT * FROM categories WHERE cat_status = 'publish'";
                                        $category_res = mysqli_query($connection, $category_query);
                                        if($category_res){
                                            while($category = mysqli_fetch_assoc($category_res)){
                                                $cat_id = $category['cat_id'];
                                                $cat_title = $category['cat_title'];
                                                if($cat_id == $post_category_id){
                                                    echo "<option selected value='$cat_id'>$cat_title</option>";
                                                }else{
                                                    echo "<option value='$cat_id'>$cat_title</option>";
                                                }
                                                
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
                                        <?php echo $post_content; ?>
                                        </textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                                

                                <label for="position"  class="col-12 col-form-label mb-3">Status</label>
                                <select class="form-select w-75 mb-5" name = "post_status" aria-label="Default select example" id="position">
                                    <option selected>Open this select menu</option>
                                    <option value="Publish">Publish</option>
                                    <option value="Draft">Draft</option>
                                </select>

                                <button class="btn btn-primary btn-lg justify-content-end" type="submit" name = "edit_post">Update</button>
                            </form>
                            
                            
                             
                            <?php
                            }
                        }
                    ?>
                    <?php 
                    if(isset($_POST['edit_post'])){
                        $post_id = $_GET['post_id'];
                        $post_title = $_POST['post_title'];
                        $post_status = $_POST['post_status'];
                        $post_image = $_FILES['post_image']['name'];
                        $post_image_temp = $_FILES['post_image']['tmp_name'];
                        $post_content = $_POST['post_content'];
                        $post_cat_id = $_POST['post_category'];
                        move_uploaded_file($post_image_temp, "../postImage/$post_image" );
                        echo $post_id, $post_title, $post_status, $post_image,$post_content, $post_cat_id;
                        $edit_post_query = "UPDATE posts SET post_category_id = $post_cat_id, post_title='$post_title',post_content ='$post_content',post_image='$post_image',post_status ='$post_status' WHERE post_id = $post_id";
                        $edit_post_res = mysqli_query($connection, $edit_post_query);
                        if($edit_post_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Page is Updated</p>
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