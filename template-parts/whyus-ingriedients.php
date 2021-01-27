<?php

$ingredients = get_field('ingredients');

?>


<section class="whyus-ingriedents">
    <p  class="divider-title text-dark">We’re an agency with big hearts, a robust reliable service and a reputation for driving incredible results. Our reputation has been built on just <strong><span class="text-colored uppercase">THREE INGREDIENTS:</span></strong></p>

    <div class="ingredient-wrapper">
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric text-colored">1</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_1"]?> </span>
                
            </div>
            <div class="ingredient-image">
                    <img src="<?php echo $ingredients["ingredient_image_1"]?>"/>
            </div>
        </div>

        <div class="ingredient-main">
            
            <div class="ingredient-content">
                <p class="text-light"><?php echo $ingredients["ingredient_content_1"]?></p>
            </div>

                <div class="video-part">
                <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_1"]?>); background-repeat: no-repeat">

                                            <!-- The Modal -->	
                                            <div class="modal">
                                                    <!-- Modal content -->
                                                    <div class="modal-content">
                
                                                        <div id="player">
                                                            <span class="close-modal">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/>
                                                                <path fill="#fd6424" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                                                </svg>
                                                            </span>
                                                            <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_1'] ?></span>
                                                            <span id="myIframe"></span>
                                                        </div>
                                                        
                                                    </div>
                                            </div>

                </div>
            </div>

        </div>
    </div>

    <div class="arrow-down arrow-down__graphite"></div>

    <div class="ingredient-wrapper">
    <div class="arrow-down arrow-down__bg-body"></div>
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric text-dark">2</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_2"]?></span>
                
            </div>
            <div class="ingredient-image">
            <img src="<?php echo $ingredients["ingredient_image_2"]?>"/>
            </div>
        </div>
        
        <div class="ingredient-main">

            <div class="ingredient-content">
            <p class="text-light"><?php echo $ingredients["ingredient_content_2"]?></p>
            </div>

            <div class="video-part">
                    <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_2"]?>); background-repeat: no-repeat">

                                                <!-- The Modal -->	
                                                <div class="modal">
                                                        <!-- Modal content -->
                                                        <div class="modal-content">
                    
                                                            <div id="player">
                                                                <span class="close-modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/>
                                                                    <path fill="#fd6424" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                                                    </svg>
                                                                </span>
                                                                <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_2'] ?></span>
                                                                <span id="myIframe"></span>
                                                            </div>
                                                            
                                                        </div>
                                                </div>

                    </div>
                </div>
        </div>
    </div>

    <div class="arrow-down arrow-down__main-theme"></div>

    <div class="ingredient-wrapper">
    <div class="arrow-down arrow-down__bg-body"></div>
        <div class="ingredient-upper">
            <div class="ingredient-title">
                <span class="ingredient-title__numeric text-dark">3</span>

                <span class="ingredient-title__text"><?php echo $ingredients["ingredient_title_3"]?> </span>
                
            </div>
            <div class="ingredient-image">
            <img src="<?php echo $ingredients["ingredient_image_3"]?>"/>
            </div>
        </div>

        <div class="ingredient-main">

            <div class="ingredient-content">
                <p class="text-dark"><?php echo $ingredients["ingredient_content_3"]?></p>
            </div>

            <div class="video-part">
                    <div id="videoContainer" style="background-image: url(<?php echo $ingredients["ingredient_video_image_3"]?>); background-repeat: no-repeat">

                                                <!-- The Modal -->	
                                                <div class="modal">
                                                        <!-- Modal content -->
                                                        <div class="modal-content">
                    
                                                            <div id="player">
                                                                <span class="close-modal">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/>
                                                                    <path fill="#fd6424" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                                                                    </svg>
                                                                </span>
                                                                <span id="ytLink" style="display:none;"><?php echo $ingredients['ingredient_video_link_3'] ?></span>
                                                                <span id="myIframe"></span>
                                                            </div>
                                                            
                                                        </div>
                                                </div>

                    </div>
            </div>

        </div>
    </div>

    <div class="arrow-down arrow-down__dark-grey"></div>

    <?php
			get_template_part( 'template-parts/whyus-apply-banner', 'page' );
	?>

</section>
