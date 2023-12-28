<?php include("include/connection.php") ?>
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
    <link rel="stylesheet" href="style.css">
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
                          <li><a class="dropdown-item " href=login.php">Login</a></li>
                          <li><a class="dropdown-item" href="create_account.php">Create Account</a></li>
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
                                <ul class="navbar-nav ">
                                  <li class="nav-item top-menu">
                                    <a class="nav-link" href="#">Home</a>
                                  </li>
                                  
                                  
                                  <li class="nav-item sub1-menu">
                                    <a class="nav-link  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Dropdown
                                    </a>
                                    <ul class="dropdown-menu  sub1-menu">
                                      <li class="nav-item"><a class="dropdown-item" href="#">Menu item</a></li>
                                      <li class="nav-item"><a class="dropdown-item" href="#">Menu item</a></li>
                                      <li class="nav-item dropend  sub2-menu"><a class="dropdown-item" href="#">Menu item</a>
                                        
                                        <a type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          Dropend
                                        </a>
                                        <ul class="dropdown-menu sub3-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Menu item</a></li>
                                        </ul>
                                      
                                    </li>
                                      
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
            <!-- *******************************************************
                            Slide
            ******************************************************** -->
        <section style="background: rgba(224, 224, 224, 0.8);">
            <div class="container p-0" >
                <div class="row">
                    <div class="col-md-7 mt-md-auto mb-md-auto overflow-hidden bg-primary-subtle rounded"  >
                        <h5 class="text-center">Most Popular Post</h5>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="User/image/slide pic 1.jpg" class="d-block w-100 mb-3" alt="..." style="height: 500px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="User/image/slide poic 2.jpg" class="d-block w-100 mb-3" alt="..." style="height: 500px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="User/image/slide pic 3.jpg" class="d-block w-100 mb-3" alt="..." style="height: 500px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>



                    <div class="col-md-5">
                        <div class="row h-50 overflow-hidden">
                            <h4 class="text-center">Top Blogs</h4>
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                                <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="User/image/slide pic 1.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="User/image/slide poic 2.jpg" class="d-block w-100" alt="..."style="height: 350px;">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="User/image/slide pic 3.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="row h-50"><div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                            <h4 class="text-center">Top Writers</h4>
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="User/image/slide pic 1.jpg" class="d-block w-100" alt="..."style="height: 350px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="User/image/slide poic 2.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="User/image/slide pic 3.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div></div>
                    </div>
                </div>
                <!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="User/image/slide pic 1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="User/image/slide poic 2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="User/image/slide pic 3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div> -->

            </div>
        </section>
    </div>
    
    <div id="all_content">
         <div class="container  bg-body-secondary mt-2">
                <!-- ****************************************************************************
                                                All Posts
                **************************************************************************** -->
                <div class="row mb-5">
                    <div class="col-md-9">
                      <?php 
                        $post_all_tQuery = "SELECT * FROM categories WHERE cat_status = 'publish'";
                        $post_all_tRes = mysqli_query($connection, $post_all_tQuery);
                        if(mysqli_num_rows($post_all_tRes)> 0){
                          while($tag = mysqli_fetch_assoc($post_all_tRes)){
                            $tag_id = $tag['cat_id'];
                            $tag_name = $tag['cat_title'];
                            echo $tag_name;
                            $tag_post_query = "SELECT * FROM posts WHERE post_category_id = $tag_id ";
                            $tag_post_res = mysqli_query($connection, $tag_post_query);
                            if(mysqli_num_rows($tag_post_res)> 0 ){
                              ?>
                              <div class="row">
                                <div class="col-md-12 bg-body-secondary">
                                    <main id="main_content">
                                        <div class="row bg-secondary-subtle rounded-1 ">
                                            <div class="w-100 ">
                                                <div style="float: left;">
                                                    <h2 class=""><?php echo $tag_name; ?></h2>
                                                </div>
                                                <div class="mt-3" style="float: right;">
                                                    <a href="User/html/posts.html" class="text-end text-body text-decoration-none mb-2">View All</a>
                                                </div>
                                            </div>
                                            <?php
                                              $count = 0;
                                              while($post = mysqli_fetch_assoc($tag_post_res)){
                                                $post_id = $post['post_id'];
                                                $post_title =$post['post_title'];
                                                $post_image = $post['post_image'];
                                                $count = $count+1;
                                                if($count < 4){

                                                

                                                

                                                  ?>
                                                    <div class="col-sm-4">
                                                      <div class="card mb-3">
                                                          <div class="post m-1 card-body">
                                                          <a href="post.php?post_id=<?php echo $post_id;?>" style="text-decoration: none;" class="text-black">
                                                          <img src="postImage/<?php echo $post_image; ?>" alt="" class="img-thumbnail ">
                                                          <p><?php echo $post_title; ?></p></a>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  <?php
                                                }
                                              }
                                            ?>
                                            
            
                                            
                                        </div>
                                    </main>
                                </div>
                            </div>


                            <?php

                            }
                          }
                        }

                      ?>
                        
                  
        
                        <div class="row">
                            <div class="col-sm-12 bg-body-secondary">
                                <main id="main_content">
                                    <div class="row bg-secondary-subtle rounded-1">
                                        <div class="w-100">
                                            <div style="float: left;">
                                                <h2 class="">Java</h2>
                                            </div>
                                            <div class="mt-3" style="float: right;">
                                                <a href="#" class="text-end text-body text-decoration-none mb-2">View All</a>
                                            </div>
                                        </div>
                                        
                                        
        
                                        <div class="col-sm-4">
                                            <div class="card mb-3">
                                                <div class="post m-1 card-body">
                                                <a href="#" style="text-decoration: none;" class="text-black">
                                                <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                                <p> Why we use java in programming.</p></a>
                                                </div>
                                            </div>
                                          </div>
        
                                          <div class="col-sm-4">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-sm-4">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
        
                        <div class="row mb-5">
                            <div class="col-sm-12 bg-body-secondary">
                                <main id="main_content">
                                    <div class="row bg-secondary-subtle rounded-1">
                                        <div class="w-100">
                                            <div style="float: left;">
                                                <h2 class="">Java</h2>
                                            </div>
                                            <div class="mt-3" style="float: right;">
                                                <a href="#" class="text-end text-body text-decoration-none mb-2">View All</a>
                                            </div>
                                        </div>
                                        
                                        
        
                                        <div class="col-sm-4">
                                            <div class="card mb-3">
                                                <div class="post m-1 card-body">
                                                <a href="#" style="text-decoration: none;" class="text-black">
                                                <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                                <p> Why we use java in programming.</p></a>
                                                </div>
                                            </div>
                                          </div>
        
                                          <div class="col-sm-4">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-sm-4">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </main>
                            </div>
                        </div>
                  
        
                        <div class="row">
                            <div class="col-sm-12 bg-body-secondary">
                                <main id="main_content">
                                    <div class="row bg-secondary-subtle rounded-1">
                                        <div class="w-100">
                                            <div style="float: left;">
                                                <h2 class="">Java</h2>
                                            </div>
                                            <div class="mt-3" style="float: right;">
                                                <a href="#" class="text-end text-body text-decoration-none mb-2">View All</a>
                                            </div>
                                        </div>
                                        
                                        
        
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="post m-1 card-body">
                                                <a href="#" style="text-decoration: none;" class="text-black">
                                                <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                                <p> Why we use java in programming.</p></a>
                                                </div>
                                            </div>
                                          </div>
        
                                          <div class="col-sm-4">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
        
                                        <div class="col-sm-4 mb-5">
                                            <div class="card">
                                            <div class="post m-1 card-body">
                                              <a href="#" style="text-decoration: none;" class="text-black">
                                              <img src="User/image/java-programming-tutorials-tips.png" alt="" class="img-thumbnail ">
                                              <p> Why we use java in programming.</p></a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </main>
                            </div>

                        </div>
                    </div>


                    

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

        <footer class="footer-02">
          <div class="container bg-dark text-white">
            
            <div class="row p-4">
              <div class="col-md-4 col-lg-5">
                <div class="row">
                  <div class="col-md-12 col-lg-8 mb-md-0 mb-4">
                    <h2 class="footer-heading"><a href="#" class="logo text-white text-decoration-none">Amazingbloging.com</a></h2>
                    <p class="text-white-50">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    <a href="#" class="text-decoration-none text-warning-emphasis">read more <span class="ion-ios-arrow-round-forward"></span></a>
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-lg-7">
                <div class="row">
                  <div class="col-md-3 mb-md-0 mb-4 border-left">
                    <h2 class="footer-heading">Discover</h2>
                    <ul class="list-unstyled text-white-50">
                      <li><a href="#" class="py-1 d-block nav-link">Buy &amp; Sell</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Merchant</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Giving back</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Help &amp; Support</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mb-md-0 mb-4 border-left">
                    <h2 class="footer-heading">About</h2>
                    <ul class="list-unstyled text-white-50">
                      <li><a href="#" class="py-1 d-block nav-link">Staff</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Team</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Careers</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Blog</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mb-md-0 mb-4 border-left">
                    <h2 class="footer-heading">Resources</h2>
                    <ul class="list-unstyled text-white-50">
                      <li><a href="#" class="py-1 d-block nav-link">Security</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Global</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Charts</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Privacy</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mb-md-0 mb-4 border-left">
                    <h2 class="footer-heading">Social</h2>
                    <ul class="list-unstyled text-white-50">
                      <li><a href="#" class="py-1 d-block nav-link">Facebook</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Twitter</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Instagram</a></li>
                      <li><a href="#" class="py-1 d-block nav-link">Googleplus</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="row mt-5">
              <div class="col-md-6 col-lg-8 ">
    
                <p class="copyright">
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a class="text-decoration-none text-warning-emphasis" href="https://colorlib.com" target="_blank">Amazinblog.com</a>
      </p>
              </div>
              <div class="col-md-6 col-lg-4 text-md-right text-white-50">
                <p class="mb-0 list-unstyled">
                  <a class="mr-md-3 text-decoration-none text-white-50 me-2" href="#">Terms</a>
                  <a class="mr-md-3 text-decoration-none text-white-50 me-2" href="#">Privacy</a>
                  <a class="mr-md-3 text-decoration-none text-white-50" href="#">Compliances</a>
                </p>
              </div>
            </div>
          </div>
        </footer>
    </div>
</body>
</html>