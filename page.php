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
    <?php include("include/header.php"); ?>
            
    </div>
    
    <div id="all_content ">
        <main class = "container">
            <?php 
                if(isset($_GET['page_id'])){
                    $page_id = $_GET['page_id'];
                    $page_query = "SELECT * FROM pages WHERE Page_id = $page_id";
                    $page_res = mysqli_query($connection, $page_query);
                    if($page_res){
                        $page = mysqli_fetch_assoc($page_res);
                        $page_title = $page['page_title'];
                        $page_type = $page['page_type'];
                        $page_image = $page['page_image'];
                        $page_content = $page['page_content'];

                        echo "<div class='card mt-5'>";
                        if($page_type = 'Person'){
                            ?>
                            <div class="card_image mt-4">
                                <img class= "mx-auto d-block rounded-circle" style= " width: 200px;" src="postImage/<?php echo $page_image; ?>" alt="">
                            </div>

                            <?php
                        }else{
                            ?>
                            <div class="card_image mt-4">
                                <img src="..." class="img-fluid" alt="...">
                            </div>
                        <?php }
                        ?>
                        <div class="card mt-5">
                            

                            <div class="card-title">
                                <h3 class ="d-block text-center"><?php echo $page_title; ?></h3>
                            </div>
                                
                            <div class="card-body">
                                <p class = "card-text ">
                                    <?php echo $page_content; ?>
                                </p>
                            </div>
                        </div>

<?php
                    }
            }
            ?>
            
        </main>
         
               
                    

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