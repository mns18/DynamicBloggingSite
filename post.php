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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/post.css">
</head>
<body>
    <div  id="all" style="background-image:url(User/image/ezgif.com-webp-to-jpg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
      <header id="header" style="background-color: #00acee;">
        <div class="header container">
        <div class="header-tl" style="display: block;width: 100%; min-height: 70px;">
            <div class="header-title" style="float: left;">
                <h1 class="">Awesome Blogging</h1>
                
            </div>
            <div style="float: right;">
                <div class="dropdown mt-4">
                    <button class="btn dropdown-toggle border-0 login-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle-o" style="font-size:30px"></i>
                    </button>
                    <ul class="dropdown-menu login-item">
                      <li><a class="dropdown-item " href="User/html/login.html">Login</a></li>
                      <li><a class="dropdown-item" href="User/html/createAccount.html">Create Account</a></li>
                    </ul>
                  </div>
            </div>
        </div>

        
           
            
            
            <div class=" row">
                <div class="col-md-3 d-sm-none">
                    <h2>Awesome Blogging</h2>
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Logo</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Course</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">jh</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tutorials</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                              
                              
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Bologs</a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Link</a></li>
                                  <li><a class="dropdown-item" href="#">Another link</a></li>
                                  <li><a class="dropdown-item" href="#">A third link</a></li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>

        </div>
        
    </header>
        
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
                                                                <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                                                                
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
                                        <div class="col-md-12 bootstrap snippets">
                                            <div class="panel">
                                                <div class="panel-body">
                                                    <textarea class="form-control" rows="2"
                                                        placeholder="What are you thinking?"></textarea>
                                                    <div class="mar-top clearfix">
                                                        <button class="btn btn-sm btn-primary pull-right"
                                                            type="submit"><i class="fa fa-pencil fa-fw"></i>
                                                            Share</button>
                                                        <a class=" fa fa-video-camera add-tooltip float-start"
                                                            href="#"></a>
                                                        <a class="fa fa-camera add-tooltip float-start"
                                                            href="#"></a>
                                                        <a class="fa fa-file add-tooltip float-start"
                                                            href="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel">
                                                <div class="panel-body">


                                                    <div class="media-block">
                                                        <a class="media-left" href="#"><img class="img-circle img-sm"
                                                                alt="Profile Picture"
                                                                src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                                        <div class="media-body">
                                                            <div class="mar-btm">
                                                                <a href="#"
                                                                    class="btn-link text-semibold media-heading box-inline">Lisa
                                                                    D.</a>
                                                                <p class="text-muted text-sm"><i
                                                                        class="fa fa-mobile fa-lg"></i> - From Mobile -
                                                                    11 min ago</p>
                                                            </div>
                                                            <p>consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat
                                                                volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                                                exerci tation ullamcorper suscipit lobortis nisl ut
                                                                aliquip ex ea commodo consequat.</p>
                                                            <div class="pad-ver">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-sm btn-default btn-hover-success"
                                                                        href="#"><i class="fa fa-thumbs-up"></i></a>
                                                                    <a class="btn btn-sm btn-default btn-hover-danger"
                                                                        href="#"><i class="fa fa-thumbs-down"></i></a>
                                                                </div>
                                                                <a class="btn btn-sm btn-default btn-hover-primary"
                                                                    href="#">Comment</a>
                                                            </div>
                                                            <hr>

                                                            <div>
                                                                <div class="media-block">
                                                                    <a class="media-left" href="#"><img
                                                                            class="img-circle img-sm"
                                                                            alt="Profile Picture"
                                                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                                                                    <div class="media-body">
                                                                        <div class="mar-btm">
                                                                            <a href="#"
                                                                                class="btn-link text-semibold media-heading box-inline">Bobby
                                                                                Marz</a>
                                                                            <p class="text-muted text-sm"><i
                                                                                    class="fa fa-mobile fa-lg"></i> -
                                                                                From Mobile - 7 min ago</p>
                                                                        </div>
                                                                        <p>Sed diam nonummy nibh euismod tincidunt ut
                                                                            laoreet dolore magna aliquam erat volutpat.
                                                                            Ut wisi enim ad minim veniam, quis nostrud
                                                                            exerci tation ullamcorper suscipit lobortis
                                                                            nisl ut aliquip ex ea commodo consequat.</p>
                                                                        <div class="pad-ver">
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-sm btn-default btn-hover-success active"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-up"></i> You
                                                                                    Like it</a>
                                                                                <a class="btn btn-sm btn-default btn-hover-danger"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-down"></i></a>
                                                                            </div>
                                                                            <a class="btn btn-sm btn-default btn-hover-primary"
                                                                                href="#">Comment</a>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                                <div class="media-block">
                                                                    <a class="media-left" href="#"><img
                                                                            class="img-circle img-sm"
                                                                            alt="Profile Picture"
                                                                            src="https://bootdey.com/img/Content/avatar/avatar3.png">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <div class="mar-btm">
                                                                            <a href="#"
                                                                                class="btn-link text-semibold media-heading box-inline">Lucy
                                                                                Moon</a>
                                                                            <p class="text-muted text-sm"><i
                                                                                    class="fa fa-globe fa-lg"></i> -
                                                                                From Web - 2 min ago</p>
                                                                        </div>
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit
                                                                            in vulputate ?</p>
                                                                        <div class="pad-ver">
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-sm btn-default btn-hover-success"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-up"></i></a>
                                                                                <a class="btn btn-sm btn-default btn-hover-danger"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-down"></i></a>
                                                                            </div>
                                                                            <a class="btn btn-sm btn-default btn-hover-primary"
                                                                                href="#">Comment</a>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="media-block pad-all">
                                                        <a class="media-left" href="#"><img class="img-circle img-sm"
                                                                alt="Profile Picture"
                                                                src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                                        <div class="media-body">
                                                            <div class="mar-btm">
                                                                <a href="#"
                                                                    class="btn-link text-semibold media-heading box-inline">John
                                                                    Doe</a>
                                                                <p class="text-muted text-sm"><i
                                                                        class="fa fa-mobile fa-lg"></i> - From Mobile -
                                                                    11 min ago</p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet.</p>
                                                            <img class="img-responsive thumbnail"
                                                                src="https://www.bootdey.com/image/400x300" alt="Image">
                                                            <div class="pad-ver">
                                                                <span class="tag tag-sm"><i
                                                                        class="fa fa-heart text-danger"></i> 250
                                                                    Likes</span>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-sm btn-default btn-hover-success"
                                                                        href="#"><i class="fa fa-thumbs-up"></i></a>
                                                                    <a class="btn btn-sm btn-default btn-hover-danger"
                                                                        href="#"><i class="fa fa-thumbs-down"></i></a>
                                                                </div>
                                                                <a class="btn btn-sm btn-default btn-hover-primary"
                                                                    href="#">Comment</a>
                                                            </div>
                                                            <hr>

                                                            <div>
                                                                <div class="media-block pad-all">
                                                                    <a class="media-left" href="#"><img
                                                                            class="img-circle img-sm"
                                                                            alt="Profile Picture"
                                                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                                                                    <div class="media-body">
                                                                        <div class="mar-btm">
                                                                            <a href="#"
                                                                                class="btn-link text-semibold media-heading box-inline">Maria
                                                                                Leanz</a>
                                                                            <p class="text-muted text-sm"><i
                                                                                    class="fa fa-globe fa-lg"></i> -
                                                                                From Web - 2 min ago</p>
                                                                        </div>
                                                                        <p>Duis autem vel eum iriure dolor in hendrerit
                                                                            in vulputate ?</p>
                                                                        <div>
                                                                            <div class="btn-group">
                                                                                <a class="btn btn-sm btn-default btn-hover-success"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-up"></i></a>
                                                                                <a class="btn btn-sm btn-default btn-hover-danger"
                                                                                    href="#"><i
                                                                                        class="fa fa-thumbs-down"></i></a>
                                                                            </div>
                                                                            <a class="btn btn-sm btn-default btn-hover-primary"
                                                                                href="#">Comment</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                            
                                        </section>


                                        <div class="row">

                                        </div>

                                        </div>
                                <?php
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
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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