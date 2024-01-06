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
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar@v1.1.1/css/bootnavbar.css"/>
  <script src="https://cdn.jsdelivr.net/gh/kmlpandey77/bootnavbar@v1.1.1/js/bootnavbar.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootnavbar.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div  id="all" style="background-image:url(User/image/ezgif.com-webp-to-jpg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <?php include("include/header.php");?>
            <!-- *******************************************************
                            Slide
            ******************************************************** -->
        <!-- slide insert here -->
        <?php 
          $select_slide_query = "SELECT * FROM slides WHERE slide_id = 1";
          $select_slide_res = mysqli_query($connection, $select_slide_query);
          if($select_slide_res){
            $select = mysqli_fetch_assoc($select_slide_res);
            $amount = $select['slide_amount'];
            if($amount == 1){
              include("include/slide1.php");
            }elseif($amount == 2){
              include("include/slide2.php");
            }elseif($amount == 3){
              include("include/slide3.php");
            }else{
              
            }

          }
        ?>
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
                            $user_id = $_GET['user_id'];
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
                                                    <a href="posts.php?cat_id=<?php echo $tag_id ?>&post_page=1" class="text-end text-body text-decoration-none mb-2">View All</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                              
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
                                                              <a href="../post.php?post_id=<?php echo $post_id;?>&user_id=<?php echo $user_id; ?>" style="text-decoration: none;" class="text-black">
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
                                        
                    </div>


                    

                    <div class="col-md-3 bg-light-subtle">
                        <?php include("right_bar.php"); ?>
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
    <script src="js/bootstrap.min.js"></script>
  <script src="js/bootnavbar.js"></script>
  <script>
    new bootnavbar();
  </script>
</body>
</html>