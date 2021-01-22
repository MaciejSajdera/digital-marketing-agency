<?php

$ingredients = get_field('ingredients');

?>


<section class="whyus-ingriedents">
    <p>We’re an agency with big hearts, a robust reliable service and a reputation for driving incredible results. Our reputation has been built on just <strong><span class="text-colored uppercase">THREE INGREDIENTS:</span></strong></p>



    <div class="ingredient-wrapper">
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric">1</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_1"]?> </span>
                
            </div>
            <div class="ingredient-image">
                    <img src="<?php echo $ingredients["ingredient_image_1"]?>"/>
            </div>
        </div>

        <div class="ingredient-main">
            
            <div class="ingredient-content">
                <?php echo $ingredients["ingredient_content_1"]?>
            </div>

                <div class="video-part">
                <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_1"]?>); background-repeat: no-repeat">

                                            <!-- The Modal -->	
                                            <div class="modal">
                                                    <!-- Modal content -->
                                                    <div class="modal-content">
                
                                                    <div id="player">
                                                        <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_1'] ?></span>
                                                        <span id="myIframe"></span>
                                                    </div>
                                                        
                                                    </div>
                                            </div>

                </div>
            </div>

        </div>
    </div>



    <div class="ingredient-wrapper">
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric">2</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_2"]?></span>
                
            </div>
            <div class="ingredient-image">
            <img src="<?php echo $ingredients["ingredient_image_2"]?>"/>
            </div>
        </div>
        
        <div class="ingredient-main">

            <div class="ingredient-content">
            <?php echo $ingredients["ingredient_content_2"]?>
            </div>

            <div class="video-part">
                    <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_2"]?>); background-repeat: no-repeat">

                                                <!-- The Modal -->	
                                                <div class="modal">
                                                        <!-- Modal content -->
                                                        <div class="modal-content">
                    
                                                        <div id="player">
                                                            <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_2'] ?></span>
                                                            <span id="myIframe"></span>
                                                        </div>
                                                            
                                                        </div>
                                                </div>

                    </div>
                </div>
        </div>
    </div>


    <div class="ingredient-wrapper">
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric">3</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_3"]?> </span>
                
            </div>
            <div class="ingredient-image">
            <img src="<?php echo $ingredients["ingredient_image_3"]?>"/>
            </div>
        </div>

        <div class="ingredient-main">

            <div class="ingredient-content">
                <?php echo $ingredients["ingredient_content_3"]?>
            </div>

            <div class="video-part">
                    <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_3"]?>); background-repeat: no-repeat">

                                                <!-- The Modal -->	
                                                <div class="modal">
                                                        <!-- Modal content -->
                                                        <div class="modal-content">
                    
                                                        <div id="player">
                                                            <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_3'] ?></span>
                                                            <span id="myIframe"></span>
                                                        </div>
                                                            
                                                        </div>
                                                </div>

                    </div>
                </div>

        </div>
    </div>


</section>
