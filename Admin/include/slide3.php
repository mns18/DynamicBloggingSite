<section style="background: rgba(224, 224, 224, 0.8);">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-7 mt-md-auto mb-md-auto overflow-hidden bg-primary-subtle rounded">
                <h5 class="text-center">Most Popular Post</h5>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <?php 
                            $slide1_button_query = "SELECT * FROM main_slide WHERE slide_for = 1";
                            $slide1_button_res = mysqli_query($connection, $slide1_button_query);
                            if(mysqli_num_rows($slide1_button_res) > 0){
                                $slide1_buttons = mysqli_num_rows($slide1_button_res);
                                for($i = 0; $i < $slide1_buttons; $i++){
                                    $count = $i +1;
                                    if($i == 0){
                                        
                                        ?>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                        class="active" aria-current="true" aria-label="Slide <?php echo $count ?>"></button>
                                        <?php
                                    }else{
                                        ?>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                        aria-label="Slide <?php echo $count ?>"></button>
                                        <?php
                                    }
                                }
                            }
                            
                        ?>
                    </div>
                    <div class="carousel-inner">
                    <?php 
                            $slide1_button_query = "SELECT * FROM main_slide WHERE slide_for = 1";
                            $slide1_button_res = mysqli_query($connection, $slide1_button_query);
                            if(mysqli_num_rows($slide1_button_res) > 0){
                            $slide1_buttons = mysqli_num_rows($slide1_button_res);
                            $i = 0; 
                            while($slide1= mysqli_fetch_assoc($slide1_button_res)){
                                $slide1_title = $slide1['slide_title'];
                                $slide1_image = $slide1['slide_imge'];
                                $slide1_text = $slide1['slide_text'];
                                $count = $i +1;
                                if($i == 0){
                                    
                                    ?>
                                    <div class="carousel-item active">
                                        <img src="postImage/<?php echo $slide1_image ?>" class="d-block w-100 mb-3" alt="..."
                                            style="height: 500px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $slide1_title ?></h5>
                                            <p><?php echo $slide1_text ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="carousel-item">
                                        <img src="postImage/<?php echo $slide1_image ?>" class="d-block w-100 mb-3" alt="..."
                                            style="height: 500px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $slide1_title ?></h5>
                                            <p><p><?php echo $slide1_text ?></p></p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $i++;
                            }
                        }else{
                            echo "<h1> NO Slide Page For Show </h1>" ;
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>



            <div class="col-md-5 h-100">
                <div class="row h-50 overflow-hidden">
                    <h4 class="text-center">Top Blogs</h4>
                    <div id="carouselExampleCaptions2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                        <?php 
                            $slide2_button_query = "SELECT * FROM main_slide WHERE slide_for = 2";
                            $slide2_button_res = mysqli_query($connection, $slide2_button_query);
                            if(mysqli_num_rows($slide2_button_res) > 0){
                                $slide2_buttons = mysqli_num_rows($slide2_button_res);
                            for($i = 0; $i < $slide2_buttons; $i++){
                                $count = $i +1;
                                if($i == 0){
                                    
                                    ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                    class="active" aria-current="true" aria-label="Slide <?php echo $count ?>"></button>
                                    <?php
                                }else{
                                    ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                    aria-label="Slide <?php echo $count ?>"></button>
                                    <?php
                                }
                            }
                        }
                            
                        ?>
                        
                        </div>
                        <div class="carousel-inner">
                        <?php 
                            $slide2_button_res = "SELECT * FROM main_slide WHERE slide_for = 2";
                            $slide2_button_res = mysqli_query($connection, $slide2_button_res);
                            if(mysqli_num_rows($slide2_button_res)){
                                $i = 0; 
                                while($slide2= mysqli_fetch_assoc($slide2_button_res)){
                                    $slide2_title = $slide2['slide_title'];
                                    $slide2_image = $slide2['slide_imge'];
                                    $slide2_text = $slide2['slide_text'];
                                    $count = $i +1;
                                    if($i == 0){
                                        
                                        ?>
                                        <div class="carousel-item active">
                                            <img src="postImage/<?php echo $slide2_image ?>" class="d-block w-100 mb-3" alt="..."
                                                style="height: 350px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $slide2_title ?></h5>
                                                <p><?php echo $slide2_text ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="carousel-item">
                                            <img src="postImage/<?php echo $slide2_image ?>" class="d-block w-100 mb-3" alt="..."
                                                style="height:350px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $slide2_title ?></h5>
                                                <p><p><?php echo $slide2_text ?></p></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
    
                                    $i++;
                                }
                            }else{
                                echo "<h1> NO Slide Page For Show </h1>" ;
                            }
                            
                           
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="row h-50">
                    <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
                        <h4 class="text-center">Top Writers</h4>
                        <div class="carousel-indicators">
                        <?php 
                            $slide3_button_query = "SELECT * FROM main_slide WHERE slide_for = 3";
                            $slide3_button_res = mysqli_query($connection, $slide3_button_query);
                            if(mysqli_num_rows($slide3_button_res) > 0){
                                $slide3_buttons = mysqli_num_rows($slide3_button_res);
                            for($i = 0; $i < $slide3_buttons; $i++){
                                $count = $i +1;
                                if($i == 0){
                                    
                                    ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                    class="active" aria-current="true" aria-label="Slide <?php echo $count ?>"></button>
                                    <?php
                                }else{
                                    ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i ?>"
                                    aria-label="Slide <?php echo $count ?>"></button>
                                    <?php
                                }
                            }
                        }
                            
                        ?>
                        </div>
                        <div class="carousel-inner">
                        <?php 
                            $slide3_button_res = "SELECT * FROM main_slide WHERE slide_for = 3";
                            $slide3_button_res = mysqli_query($connection, $slide3_button_res);
                            if(mysqli_num_rows($slide3_button_res)){
                                $i = 0; 
                                while($slide3= mysqli_fetch_assoc($slide3_button_res)){
                                    $slide3_title = $slide3['slide_title'];
                                    $slide3_image = $slide3['slide_imge'];
                                    $slide3_text = $slide3['slide_text'];
                                    $count = $i +1;
                                    if($i == 0){
                                        
                                        ?>
                                        <div class="carousel-item active">
                                            <img src="postImage/<?php echo $slide3_image ?>" class="d-block w-100 mb-3" alt="..."
                                                style="height: 350px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $slide3_title ?></h5>
                                                <p><?php echo $slide3_text ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="carousel-item">
                                            <img src="postImage/<?php echo $slide2_image ?>" class="d-block w-100 mb-3" alt="..."
                                                style="height:350px;">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $slide2_title ?></h5>
                                                <p><p><?php echo $slide2_text ?></p></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
    
                                    $i++;
                                }
                            }else{
                                echo "<h1> NO Slide Page For Show </h1>" ;
                            }
                            
                           
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
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