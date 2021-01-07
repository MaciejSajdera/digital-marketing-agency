<section class="section-welcome" style="
  background:url(<?php echo get_field('background_image_2') ?>), linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo get_field('background_image_1') ?>);
 background-size: 750px, 100%, cover;
 background-repeat: no-repeat;

 
 background-color: #e1e1e1;background-position: right bottom;">
    <div class="wrapper-flex-column">
        <div class="wrapper-flex-column welcome-text">
            <span class="up-title">RESULTS FOCUSED</span>
            <h1>GOOGLE <br />
            ADS PPC</h1>
            <p>Top 3% <strong>Google Premier Partner</strong> and Voted by <strong>Google as One</strong> of The Best in Europe for <strong>Growing Businesses Online.</strong></p>
        </div>
        <div class="wrapper-flex-row-start">

            <a class="orange-oval-button">Learn more</a>
            <div class="wrapper-flex-row awards-promo-banner">
            <?php 

            $args = array(
                'post_type'=> 'awards',
                'order'=> 'ASC',
                'posts_per_page' => 6
            );              

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : 
                $the_query->the_post(); 
                // content goes here
                echo '<span class="awards-promo-banner__logo"><img src="'.get_the_post_thumbnail_url().'"></span>';
                endwhile; 
                wp_reset_postdata(); 
            else: 
            endif;


            ?>
        </div>
        </div>
        <span class="white-oval-button-outline signature">Laura Moxham – Founder & MD, YBA PPC</span>
    </div>

</section>