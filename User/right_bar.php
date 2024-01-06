
<aside class="sidebar m-2 ">
                            <div class="row bg-dark-subtle">
                                <nav class="navbar navbar-light bg-body-secondary">
                                    <div class="container-fluid">
                                      <form action="search.php" class="d-flex" method = "POST" >
                                        <div class="col-md-8">
                                            <input class="form-control me-2" type="search" name = "search_text"placeholder="Search" aria-label="Search">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-secondary" name="search" type="submit">Search</button>
                                        </div>
                                       
                                        
                                      </form>
                                    </div>
                                  </nav>
                            </div>

                            <div class="row p-2 mt-2">
                            <?php 
                                    $ads_quey = "SELECT * FROM  ads WHERE status = 'Publish'";
                                    $ads_res = mysqli_query($connection, $ads_quey);
                                    if(mysqli_num_rows($ads_res) > 0){
                                        while($ads = mysqli_fetch_assoc($ads_res)){
                                            $ads_id = $ads['ads_id'];
                                            $ads_title = $ads['ads_title'];
                                            $ads_image = $ads['ads_image'];
                                            $ads_text = $ads['ads_text'];
                                            $ads_start_time = $ads['ads_start_time'];
                                            $ads_end_time = $ads['ads_end_time'];
                                            $ads_status = $ads['status'];
                                            $now_time = date("Y-m-d"); 
                                            if(($now_time >= $ads_start_time) && ($now_time <= $ads_end_time)){

                                            
                                            ?>
                                            <div class="carousel-item active">
                                                <img src="../postImage/<?php echo $ads_image; ?>" class="d-block w-100 mb-3" alt="..." >
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5  class = "top"><?php echo $ads_title; ?></h5>
                                                    <p><?php echo $ads_text; ?></p>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                        }
                                    }
                                        
                                ?>
                                
                                
                            </div>
                        </aside>