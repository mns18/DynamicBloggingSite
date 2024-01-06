

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
<div id="all" class='container-fluid overflow-x-hidden'>
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

        <div class='col-9 border-left h-100 overflow-y-scroll overflow-x-hidden'>
            <main id='main_panel' class="text-white" style="height: 100vh;">
                <div class="container-fluid p-5 ">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-white" scope="col">NO: </th>
                            <th class="text-white" scope="col">Title</th>
                            <th class="text-white" scope="col">Author</th>
                            <th class="text-white" scope="col">Image</th>
                            <th class="text-white" scope="col">Date</th>
                            <th class="text-white" scope="col">Status</th>
                            <th class="text-white" scope="col">Edit</th>
                            <th class="text-white" scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $all_page_query = "SELECT * FROM posts WHERE post_status = 'Pending'";
                        $all_category_res = mysqli_query($connection, $all_page_query);
                        if(mysqli_num_rows($all_category_res) > 0){
                            $n_o_p = 0;
                            while($post = mysqli_fetch_assoc($all_category_res)){
                                $n_o_p = $n_o_p + 1;
                                $post_id = $post['post_id'];
                                $post_title = $post['post_title'];
                                $post_author = $post['post_author'];
                                $post_image = $post['post_image'];
                                $post_date = $post['post_date'];
                                

                                $post_status = $post['post_status'];
                                ?>
                                <tr style = "height:80px">
                                <th class="text-white" scope="row"><?php echo $n_o_p; ?></th>
                                <td class="text-white"><?php echo $post_title ?></td>
                                <td class="text-white"><?php echo $post_author ?></td>
                                <td class="text-white" ">
                                    <img src="../postImage/<?php echo $post_image; ?>" style = "height:70; margin-top: 5px;">
                                </td>
                                <td class="text-white"><?php echo $post_date; ?></td>
                                <td class="text-white"><?php echo $post_status; ?></td>

                                <td><a href="post_request.php?approve_id=<?php echo $post_id;?>" class="text-decoration-none text-success">Approve</a></td>
                                <td><a href="post_request.php?delete_id=<?php echo $post_id;?>" class="text-decoration-none text-danger">Delete</a></td>
                            </tr>
                                <?php
                            }
                        }
                            ?>
                            

                       
                    
                        
                        

                    </tbody>
                </table>
                </div>
            </main>
            <?php 
                    if(isset($_GET['approve_id'])){
                        $post_id = $_GET['approve_id'];
                        $edit_query = "UPDATE posts SET  post_status = 'Publish' WHERE post_id = $post_id ";
                        $edit_res = mysqli_query($connection, $edit_query);
                        if($edit_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Menu Delete Successfully</p>
                                    </div>
                            <?php
                            header("Location: post_request.php");
                            

                        }else{
                            ?>
                                <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Deleted Problem</strong>
                                        <p class=" text-white ">Some how it not deleted please try again..</p>
                                    </div>
                            <?php
                        }
                        
                    }
                    ?>

                    <?php 
                    if(isset($_GET['delete_id'])){
                        $page_id = $_GET['delete_id'];
                        $delete_query = "UPDATE posts SET  post_status = 'trash' WHERE post_id = $page_id ";
                        $delete_menu_res = mysqli_query($connection, $delete_query);
                        if($delete_menu_res){
                            ?>
                                <div class="alert bg-success top-0 position-absolute z-3 ">
                                    <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Successfully!</strong>
                                        <p class=" text-white ">Menu Delete Successfully</p>
                                    </div>
                            <?php
                            header("Location: post_request.php");

                        }else{
                            ?>
                                <div class="alert bg-danger top-0 position-absolute z-3 ">
                                        <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                            onclick="this.parentElement.style.display='none';">&times;</span>
                                        <strong class=" text-white ">Deleted Problem</strong>
                                        <p class=" text-white ">Some how it not deleted please try again..</p>
                                    </div>
                            <?php
                        }
                        
                    }
                    ?>
        </div>
    </main>
</div>
</body>
</html>