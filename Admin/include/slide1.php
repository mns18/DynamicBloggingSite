<section style="background: rgba(224, 224, 224, 0.8);">
    <div class="container p-0">
        <div class="row">
            <div class="col-12 mt-md-auto mb-md-auto overflow-hidden bg-primary-subtle rounded">
                <h5 class="text-center">Most Popular Post</h5>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php 
                            $slide1_button_query = "SELECT * FROM main_slide WHERE slide_for = 1";
                            $slide1_button_res = mysqli_query($connection, $slide1_button_query);
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
                        ?>
                        
                        
                        
                    </div>
                    <div class="carousel-inner">
                    <?php 
                            $slide1_button_query = "SELECT * FROM main_slide WHERE slide_for = 1";
                            $slide1_button_res = mysqli_query($connection, $slide1_button_query);
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
                                            style="height: 700px;">
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
                                            style="height: 700px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5><?php echo $slide1_title ?></h5>
                                            <p><?php echo $slide1_text ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }

                                $i++;
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
        </div>
    </div>
</section>