<?php include('../include/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="User/css/style.css">
</head>

<body>
    <div class="all">
        <header>

        </header>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 vh-100 bg-body-tertiary overflow-y-scroll ">
                    <main>
                        <?php 
                            if(isset($_GET['user_id'])){
                                $user_id = $_GET['user_id'];

                                $user_post_query = "SELECT * FROM  posts WHERE post_author_id = $user_id";
                                $user_post_res = mysqli_query($connection, $user_post_query);
                                $user_name_query = "SELECT * FROM users WHERE user_id = $user_id";
                                $user_name_res = mysqli_query($connection, $user_name_query);
                                if($user_name_res){
                                    $u = mysqli_fetch_assoc($user_name_res);
                                    $user_name = $u['user_first_name'];
                                    ?>
                                    <div class="left_content">
                                        <div class="card">
                                            <div class="card-title">
                                                <h2 class = "ml-2"><?php echo $user_name; ?></h2>
                                            </div>
                                            <div class="card-body">
                                                <?php 
                                                if(mysqli_num_rows($user_name_res) > 0){
                                                    $no_o_post = 0;
                                                    ?>
                                                    <table class="table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">NO: </th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Edit</th>
                                                            <th scope="col">Delete</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                        while($post = mysqli_fetch_assoc($user_post_res)){
                                                            $no_o_post = $no_o_post + 1;
                                                            $post_id = $post['post_id'];
                                                            $post_title = $post['post_title'];
                                                            $post_category_id = $post['post_category_id'];
                                                            $cat_query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                                                            $cat_res = mysqli_query($connection, $cat_query);
                                                            $cat = mysqli_fetch_assoc($cat_res);
                                                            $post_category_name = $cat['cat_title'];
                                                            $post_status = $post['post_status'];
                                                            $post_image = $post['post_image'];
                                                            ?>
                                                            <tr style="height: 80px;">
                                                                <th scope="row"><?php echo $no_o_post ?></th>
                                                                <td><?php echo $post_title ?></td>
                                                                <td><?php echo $post_category_name ?></td>
                                                                <td><img style = "height:70px; weight: 70px" class="m-1" src="../postImage/<?php echo$post_image; ?>" alt=""></td>
                                                                <td>Status</td>
                                                                <td><a href="#" class="text-decoration-none text-warning">Edit</a></td>
                                                                <td><a class="text-decoration-none text-danger" href="#">Delete</a></td>
                                                            </tr>

                                                        <?php }
                                                    ?>
                                                    
                                                        
                                                        

                                                    </tbody>
                                                </table>

                                                <?php }
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>

                                <?php

                                }
                            }
                        ?>
                        
                    </main>
                </div>
                <div class="col-md-3 vh-100 bg-body-secondary overflow-y-scroll">

                    <?php
                    if($_GET['user_id']){
                                    $user_id = $_GET['user_id'];
                                    $edit_info_query = "SELECT * FROM users WHERE user_id = $user_id";
                                    $edit_info_res = mysqli_query($connection, $edit_info_query);
                                    if($edit_info_res){
                                        $user = mysqli_fetch_assoc($edit_info_res);
                                        $user_first_name = $user['user_first_name'];
                                        $user_last_name = $user['user_last_name'];
                                        $user_email = $user['user_mail'];
                                        $user_number = $user['user_number'];
                                        $user_Country = $user['user_country'];
                                        $user_job = $user['user_job'];
                                        $user_image = $user['user_image'];
                                        $user_pass = $user['user_password'];
                                        $user_position = $user['user_position'];

                                        
                                        
                                        ?>
                    <div class="text-center m-3">
                        <img src="image/no_image.png" class="rounded-circle w-75" alt="...">
                    </div>
                    <div class="info">
                        <table class="table table-striped table-hover">

                            <tbody>
                                <tr">
                                    <th scope="row"> First Name</th>
                                    <td><?php echo $user_first_name; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row"> Last Name</th>
                                        <td><?php echo $user_last_name; ?></td>
                                        </tr>
                                    <tr">
                                        <th scope="row">Email</th>
                                        <td><?php echo $user_email; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row">Number</th>
                                        <td><?php echo $user_number; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row">position</th>
                                        <td><?php echo $user_position; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row">Country</th>
                                        <td><?php echo $user_Country; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row">Job</th>
                                        <td><?php echo $user_job; ?></td>
                                    </tr>
                                    <tr">
                                        <th scope="row">Post Approve</th>
                                        <td>This is post title</td>
                                    </tr>
                                    <tr">
                                        <th scope="row">Post Pending</th>
                                        <td>This is post title</td>
                                    </tr>


                            </tbody>
                        </table>

                        <div class="button bottom-0 mb-4 row">



                            <!-- Edit Information -->
                            <div class="col-12  mt-3">

                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                                    data-target="#editInformation">
                                    Edit Information
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editInformation" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">


                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Information</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">First Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="<?php echo $user_first_name; ?>"
                                                            class="form-control" id="email" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">Last Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="<?php echo $user_last_name; ?>"
                                                            class="form-control" id="email" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" value="<?php echo $user_email; ?>"
                                                            class="form-control" id="email">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" value="<?php echo $user_number; ?>"
                                                            class="form-control" id="email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">Country</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="<?php echo $user_Country; ?>"
                                                            class="form-control" id="email" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-12 col-form-label">Job</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="<?php echo $user_job; ?>"
                                                            class="form-control" id="email" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Edit Image -->
                            <div class="col-12 mt-3">
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                                    data-target="#editImage">
                                    Edit Image
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editImage" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Image</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Select
                                                        your image</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control" id="inputPassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Edit Password -->
                            <div class="col-12 mt-3">
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                                    data-target="#editPassword">
                                    Edit Image
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editPassword" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Password</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="mb-3 row">
                                                    <label for="inputPassword"
                                                        class="col-12 col-form-label">Old Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword">
                                                    </div>
                                                    
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="inputPassword"
                                                        class="col-12 col-form-label">New Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword">
                                                    </div>
                                                    
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="inputPassword"
                                                        class="col-12 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" id="inputPassword">
                                                    </div>
                                                    
                                                </div>

                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Edit Security Question  -->
                            <div class="col-12  mt-3">
                                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                                    data-target="#editSecurity">
                                    Edit Information
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editSecurity" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>

                    <?php
                                            }
                                        }
                                        
                                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>