<?php include('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar@v1.1.1/css/bootnavbar.css" />
    <script src="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar@v1.1.1/js/bootnavbar.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootnavbar.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="all"
        style="background-image:url(User/image/ezgif.com-webp-to-jpg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <?php include("include/header.php"); ?>

    </div>

    <div id="all_content">
        <div class="container  bg-body-secondary mt-2">
            <!-- ****************************************************************************
                                                Post
                **************************************************************************** -->
            <div class="row mb-5">
                <?php 
                        if(isset($_GET['post_id'])){
                            $post_id = $_GET['post_id'];
                            $post_query = "SELECT * FROM posts WHERE post_id = $post_id";
                            $post_query_res = mysqli_query($connection, $post_query);
                            if($post_query_res){
                                $post = mysqli_fetch_assoc($post_query_res);
                                $post_title = $post['post_title'];
                                $post_image = $post['post_image'];
                                $post_content = $post['post_content'];
                                $post_like = $post['post_like'];
                                $post_comment = $post['post_comment'];
                                $post_time = $post['post_date'];


                                ?>
                <div class="col-md-9">

                    <main class="m-3">
                        <div class="row mt-5 ms-3">
                            <h3 class="post-title">
                                <?php echo $post_title; ?>
                            </h3>
                        </div>
                        <div class="row mt-4 ">
                            <div class="card ">
                                <div class="card-img mt-3">
                                    <img src="postImage/<?php echo $post_image; ?>" class="img-fluid rounded" alt="">
                                </div>

                                <div class="card-body">
                                    <p class="" style="text-align: justify;">
                                        <?php echo $post_content; ?>
                                    </p>
                                </div>

                                <div class="row card-footer">
                                    <div class="col-4">
                                        <div class="row">
                                            <small><?php echo $post_like; ?></small>

                                        </div>
                                        <div class="row">
                                            <a href="#">Like </a>
                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <small><?php echo $post_comment; ?></small>

                                        </div>
                                        <div class="dropdown">
                                            <button onclick="myFunction()" class="dropbtn btn">Dropdown</button>

                                        </div>

                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <small>0</small>

                                        </div>
                                        <div class="row">
                                            <a href="#">Share </a>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>

                    </main>
                    <!-- ******************************************************************************************************************************************
                                                        Comment 
******************************************************************************************************************************************* -->
                    <section class="CLS">
                        <div id="myDropdown" class="row dropdown-content">
                            <div class="panel">
                                <form action="" method="POST" >
                                    <div class="panel-body">
                                        <textarea class="form-control" rows="2"
                                            placeholder="What are you thinking?" name = "comment_text"></textarea>
                                        <div class="mar-top clearfix">
                                            <button class="btn btn-sm btn-primary pull-right" type="submit" name = "insert_comment"><i
                                                    class="fa fa-pencil fa-fw"></i> Share</button>
                                            <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                            <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                                            <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                                        </div>
                                    </div>
                                </form>
                                <?php 
                                    if(isset($_GET['user_id']) && !isset($_GET['reply_id'])){
                                        $user_id = $_GET['user_id'];
                                        $post_id = $_GET['post_id'];
                                        if(isset($_POST['insert_comment'])){
                                            $comment_content = $_POST['comment_text'];
                                            $insert_query = "INSERT INTO comments (comments_post_id, comment_author_id, comment_content,  comment_p_id)";
                                            $insert_query .= " VALUES ( $post_id, $user_id, '$comment_content', 0)";
                                            $insert_res = mysqli_query($connection, $insert_query);
                                            if($insert_res){
                                                header("Location: post.php?post_id=$post_id&user_id=$user_id");
                                            }
                                            

                                        }
                                    }else{
                                        if(isset($_POST['insert_comment']) && !isset($_GET['reply_id'])){
                                            ?>
                                        <div class="alert bg-danger top-0 position-absolute z-3 ">
                                            <span class="closebtn float-end"style = "font-size: 20px; cursor: pointer;"
                                                onclick="this.parentElement.style.display='none';">&times;</span>
                                            <strong class=" text-white ">Now you can not comment !</strong>
                                            <p class=" text-white ">Please Loin and try again..</p>
                                        </div>
                                        <?php
                                        }
                                        
                                    }

                                    if(isset($_GET['user_id'])){
                                        if(isset($_GET['reply_id'])){
                                            $post_id = $_GET['post_id'];
                                            $user_id = $_GET['user_id'];
                                            $reply_id = $_GET['reply_id'];
                                            if(isset($_POST['insert_comment'])){
                                                $comment_content = $_POST['comment_text'];
                                                $insert_query = "INSERT INTO comments (comments_post_id, comment_author_id, comment_content,  comment_p_id)";
                                                $insert_query .= " VALUES ( $post_id, $user_id, '$comment_content', $reply_id)";
                                                $insert_res = mysqli_query($connection, $insert_query);
                                                if($insert_res){
                                                    header("Location: post.php?post_id=$post_id&user_id=$user_id");
                                                }
                                            }
                                        }
                                    }
                                ?>
                                
                            </div>
                            <div class="panel">
                                <div class="panel-body">
                                <?php
                                if(isset($_GET['post_id'])){
                                    $comment_post_id = $_GET['post_id'];
                                    $comment_query = "SELECT * FROM comments WHERE comments_post_id = $comment_post_id AND comment_p_id = 0";
                                    $comment_res = mysqli_query($connection, $comment_query);
                                    if(mysqli_num_rows($comment_res) > 0){
                                        while($comment = mysqli_fetch_assoc($comment_res)){
                                             $comment_id = $comment['comments_id'];
                                             $comment_author_id = $comment['comment_author_id'];
                                             $get_author = "SELECT * FROM users WHERE user_id = $comment_author_id";
                                             $get_author_res = mysqli_query($connection, $get_author);
                                             $author = mysqli_fetch_assoc($get_author_res);
                                             $author_name = $author['user_first_name'];
                                             $author_name .= " ";
                                             $author_name .= $author['user_last_name'];
                                             $author_image = $author['user_image'];
                                             $comment_date = $comment['comment_date'];
                                             $comment_content = $comment['comment_content'];
                                             ?>
                                            <div class="media-block p-3">
                                                <a class="media-left" href="#"><img class="img-circle img-sm"
                                                        alt=""
                                                        src="/User/image/<?php echo $author_image; ?>"></a>
                                                <div class="media-body">
                                                    <div class="mar-btm">
                                                        <a href="#" class="btn-link text-semibold media-heading box-inline text-decoration-none text-black"><?php echo $author_name; ?></a>
                                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg  m-2"></i><?php echo $comment_date; ?></p>
                                                    </div>
                                                    <p><?php echo $comment_content; ?></p>
                                                    <div class="pad-ver">
                                                        
                                                        <a class="btn btn-sm btn-default btn-hover-primary" href="post.php?post_id=<?php echo $comment_post_id; ?>&user_id=<?php echo $comment_author_id;?>&reply_id=<?php echo $comment_id; ?>">Reply</a>
                                                    </div>
                                                    

                                                    <div>
                                                        <?php
                                                        $subComment_query = "SELECT * FROM comments WHERE comments_post_id = $comment_post_id AND comment_p_id = $comment_id";
                                                        $subComment_res = mysqli_query($connection, $subComment_query);
                                                        if(mysqli_num_rows($subComment_res) > 0){
                                                            while($subComment = mysqli_fetch_assoc($subComment_res)){
                                                                $SubComment_id = $subComment['comments_id'];
                                                                $SubComment_author_id = $subComment['comment_author_id'];
                                                                $SubC_get_author = "SELECT * FROM users WHERE user_id = $SubComment_author_id";
                                                                $SubC_get_author_res = mysqli_query($connection, $SubC_get_author);
                                                                $SubC_author = mysqli_fetch_assoc($SubC_get_author_res);
                                                                $SubC_author_name = $SubC_author['user_first_name'];
                                                                $SubC_author_name .= " ";
                                                                $SubC_author_name .= $SubC_author['user_last_name'];
                                                                $SubC_author_image = $SubC_author['user_image'];
                                                                $SubComment_date = $subComment['comment_date'];
                                                                $SubComment_content = $subComment['comment_content'];
                                                                ?>
                                                                <div class="media-block ms-4">
                                                                    <a class="media-left text-decoration-none text-black" href="#"><img class="img-circle img-sm rounded-circle"style = "height: 50px; weight: 50px"
                                                                            alt=""
                                                                            src="User/image/<?php echo $SubC_author_image; ?>"></a>
                                                                    <div class="media-body">
                                                                        <div class="mar-btm">
                                                                            <a href="#"
                                                                                class="btn-link text-semibold media-heading box-inline text-decoration-none text-black"><?php echo $SubC_author_name; ?></a></a>
                                                                            <p class="text-muted text-sm"><i
                                                                                    class="fa fa-mobile fa-lg m-2 text-sm"><?php echo $SubComment_date; ?></i></p>
                                                                        </div>
                                                                        <p><?php echo $SubComment_content; ?></p>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                            }
                                                                ?>
                                                        
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                        }
                                
                                }?>


                                </div>
                            </div>
                        </div>

                    </section>




                </div>
                <?php
                            }
                        }
                    }
                    ?>





                <div class="col-md-3 bg-light-subtle">
                    <aside class="sidebar m-2 ">
                        <div class="row bg-dark-subtle">
                            <nav class="navbar navbar-light bg-body-secondary">
                                <div class="container-fluid">
                                    <form class="d-flex">
                                        <div class="col-md-8">
                                            <input class="form-control me-2" type="search" placeholder="Search"
                                                aria-label="Search">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-secondary" type="submit">Search</button>
                                        </div>


                                    </form>
                                </div>
                            </nav>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>


    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>