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
            </main>

        </div>
    </main>
</div>
</body>
</html>