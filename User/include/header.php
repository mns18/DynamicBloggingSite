<header id="header" style="background-color: #00acee;">
        <div class="header container">
        <div class="header-tl" style="display: block;width: 100%; min-height: 70px;">
            <div class="header-title" style="float: left;">
            <?php 
              $select_query = "SELECT * FROM header WHERE header_Id = 1";
              $select_res = mysqli_query($connection, $select_query);
              
              if($select_res){
                  $header= mysqli_fetch_assoc($select_res);
                  $header_title = $header['header_title'];
                  echo "<h1 class=''>$header_title</h1>";
                 
              }

                        

              ?>
                
                
            </div>
            <div style="float: right;">
                <div class="dropdown mt-4">
                    <button class="btn dropdown-toggle border-0 login-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle-o" style="font-size:30px"></i>
                    </button>
                    <ul class="dropdown-menu login-item">
                      <?php 
                      if(isset($_GET['user_id'])){
                        $user_id = $_GET['user_id'];
                        ?>
                        <li><a class="dropdown-item " href="profile.php?user_id=<?php echo $user_id;?>">Profile</a></li>
                         <li><a class="dropdown-item" href="../index.php">Logout</a></li>
                        <?php
                      }
                      ?>
                      <!-- <li><a class="dropdown-item " href="profile.php?user_id=">Profile</a></li>
                      <li><a class="dropdown-item" href="../index.php">Logout</a></li> -->
                    </ul>
                  </div>
            </div>
        </div>


            
            <div class=" row">
                
                <div class="col-md-12">
                <nav class="navbar navbar-expand-lg sticky-top" id="main_navbar">
                    <div class="container-fluid sticky-top">
                      <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"aria-expanded="false"aria-label="Toggle navigation"
                      >
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <?php  
                            $menu_query = "SELECT * FROM categories WHERE cat_status = 'publish' AND cat_p_id = 0";
                            $menu_res = mysqli_query($connection, $menu_query);
                            if(mysqli_num_rows($menu_res) > 0){
                              while($menu = mysqli_fetch_assoc($menu_res)){
                                $menu_id = $menu['cat_id'];
                                $menu_name = $menu['cat_title'];
                                $menu_p_id = $menu['cat_p_id'];
                                $sub1_quey = "SELECT * FROM categories WHERE cat_p_id = $menu_id";
                                $sub1_res = mysqli_query($connection, $sub1_quey);
                                if(mysqli_num_rows($sub1_res) > 0){
                                  ?>
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                      >
                                        <?php echo $menu_name; ?>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <?php 
                                          while($sub1 = mysqli_fetch_assoc($sub1_res)){
                                            $sub1_id = $sub1['cat_id'];
                                            $sub1_name = $sub1['cat_title'];
                                            $sub1_p_id = $sub1['cat_p_id'];
                                            $sub2_query = "SELECT * FROM categories WHERE cat_p_id = $sub1_id AND cat_status = 'publish'";
                                            $sub2_res = mysqli_query($connection, $sub2_query);
                                            if(mysqli_num_rows($sub2_res) > 0){
                                              ?>
                                              <li class="nav-item dropdown">
                                                <a
                                                  class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                                  <?php echo $sub1_name; ?>
                                                </a>
                                                <ul class="dropdown-menu">
                                                  <?php 
                                                      while($sub1 = mysqli_fetch_assoc($sub2_res)){
                                                        $sub2_id = $sub1['cat_id'];
                                                        $sub2_name = $sub1['cat_title'];
                                                        $sub2_p_id = $sub1['cat_p_id'];
                                                        $sub3_query = "SELECT * FROM categories WHERE cat_p_id = $sub2_id AND cat_status = 'publish'";
                                                        $sub3_res = mysqli_query($connection, $sub3_query);
                                                        if(mysqli_num_rows($sub2_res) > 0){
                                                          ?>
                                                          <li class="nav-item dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                                    <?php echo $sub2_name; ?>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                      <?php 
                                                        while($sub3 = mysqli_fetch_assoc($sub3_res)){
                                                          $sub3_id = $sub3['cat_id'];
                                                          $sub3_name = $sub3['cat_title'];
                                                          echo "<li><a class='dropdown-item' href='#'>$sub3_name</a></li>";
                                                        }
                                                      ?>
                                                      
                                                    </ul>
                                                  </li>
                                                          <?php

                                                        }else{
                                                          echo "<li><a class='dropdown-item' href='#'>$sub2_name</a></li>";
                                                        }
                                                    }?>


                                                </ul>
                                              </li>
                                              <?php

                                            }else{
                                              ?>
                                                <li><a class="dropdown-item" href="#"><?php echo $sub1_name; ?></a></li>
                                              <?php
                                            }
                                          }
                                        ?>
                                        
                                        
                                        
                                      </ul>
                                    </li>
                                <?php
                                }else{
                                  ?>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#"><?php echo $menu_name; ?></a>
                                    </li>
                                  <?php
                                }

                              }
                            }
                          ?>

                        </ul>
                        <!-- <form class="d-flex">
                          <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                          />
                          <button class="btn btn-outline-success" type="submit">
                            Search
                          </button>
                        </form> -->
                      </div>
                    </div>
                  </nav>
                </div>
            </div>

        </div>
        
    </header>