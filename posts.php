<?php include("include/connection.php"); ?>
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div  id="all" style="background-image:url(User/image/ezgif.com-webp-to-jpg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
      <?php include("include/header.php"); ?>
         
        
    </div>
    
    <div id="all_content">
         <div class="container  bg-body-secondary mt-2">
                <!-- ****************************************************************************
                                                All Posts
                **************************************************************************** -->
                <div class="row mb-5">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12 bg-body-secondary">
                                <main id="main_content">
                                    <div class="row bg-secondary-subtle rounded-1 ">
                                        <?php 
                                            if(isset($_GET['cat_id'])){
                                                $cat_id = $_GET['cat_id'];
                                                $category_query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                                $category_res = mysqli_query($connection, $category_query);
                                                $category = mysqli_fetch_assoc($category_res);

                                                $cat_name = $category['cat_title'];
                                                ?>
                                                <div class="w-100 ">
                                                    <div style="float: left;">
                                                        <h2 class=""><?php echo $cat_name ?></h2>
                                                    </div>
                                                    
                                                </div>
                                                <?php
                                            }
                                        ?>
                                        
                                        
                                        <?php 
                                            if(isset($_GET['cat_id'])){
                                                $cat_Id = $_GET['cat_id'];
                                                $post_query = "SELECT * FROM posts WHERE post_category_id = $cat_id AND post_status = 'Publish'";
                                                $posts_res = mysqli_query($connection, $post_query);
                                                if($posts_res){
                                                    $posts_page = $_GET['post_page'];
                                                    $post_page_start = (12 * ($posts_page - 1)) + 1 ;
                                                    $post_page_end = 12 * $posts_page;
                                                    while($post = mysqli_fetch_assoc($posts_res)){
                                                        if($post_page_start <= $post_page_end ){
                                                            $post_id = $post['post_id'];
                                                            $post_title = $post['post_title'];
                                                            $post_image = $post['post_image'];
                                                            ?>
                                                            <div class="col-sm-4">
                                                              <div class="card mb-3">
                                                                  <div class="post m-1 card-body">
                                                                  <a href="post.php?post_id=<?php echo $post_id; ?>" style="text-decoration: none;" class="text-black">
                                                                  <img src="postImage/<?php echo $post_image; ?>" alt="" class="img-thumbnail ">
                                                                  <p><?php echo $post_title ?></p></a>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            <?php
                                                        }
                                                        
                                                    }
                                                }
                                            }
                                        ?>
        
                                        
        
                                          
                                    </div>
                                </main>
                            </div>
                        </div>
                        <div class="row">
                            <nav aria-label="...">
                                <ul class="pagination mt-2">
                                  <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                  </li>
                                  <?php
                                  $post_cat_id = $_GET['cat_id'];
                                  $post_page = $_GET['post_page'];
                                  $posts_query = "SELECT * FROM posts WHERE post_category_id = $post_cat_id AND post_status = 'Publish'";
                                  $posts_res = mysqli_query($connection, $posts_query);
                                  if($posts_res){
                                    $num_o_post = mysqli_num_rows($posts_res);
                                    $num_o_post = (int)($num_o_post/12) +1;
                                    for($i = 0; $i < $num_o_post; $i++ ){
                                      $c= $i + 1;
                                      if($post_page == $c){
                                        echo "<li class='bg-primary page-item'><a class='page-link bg-primary text-white' href='posts.php?cat_id=$post_cat_id&post_page=$c'>$num_o_post</a></li>";
                                      }else{
                                        echo "<li class='page-item'><a class='page-link' href='posts.php?cat_id=$post_cat_id&post_page=$c'>$num_o_post</a></li>";
                                      }
                                      
                                    }
                                  }
                                  ?>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                              </nav>
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
      
                  <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a class="text-decoration-none text-warning-emphasis" href="https://colorlib.com" target="_blank">Amazinblog.com</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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