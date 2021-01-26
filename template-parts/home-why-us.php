<?php
$advantages = get_field('why_us');
?>

<section class="section-why-us">
            <div class="section-header">
                <?php
                echo '<h2 class="text-dark">'. $advantages['why_us_header_title'] . '</h2>';
                echo '<span class="text-colored up-title">' . $advantages['why_us_subheader'] . '</span>';
                echo '<p>' . $advantages['why_us_subheader_slogan'] . '</p>';
                ?>

            </div>

                <div class="advantages-container why-us-container">
                        <?php
                        if( $advantages ): ?>
                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['why_us_image_1'] ); ?>" alt="" />
                                <div class="content why-us-content">
                                
                                     <h5><?php echo $advantages['why_us_title_1']; ?></h5>
                                    <p><?php echo $advantages['why_us_paragraph_1']; ?></p>
                                </div>
                            </div>

                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['why_us_image_2'] ); ?>" alt="" />
                                <div class="content why-us-content">
                                
                                     <h5><?php echo $advantages['why_us_title_2']; ?></h5>
                                    <p><?php echo $advantages['why_us_paragraph_2']; ?></p>
                                </div>
                            </div>

                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['why_us_image_3'] ); ?>" alt="" />
                                <div class="content why-us-content">
                                
                                     <h5><?php echo $advantages['why_us_title_3']; ?></h5>
                                    <p><?php echo $advantages['why_us_paragraph_3']; ?></p>
                                </div>
                            </div>

                        <?php endif; ?>
                </div>

                <a href="" class="orange-oval-button-outline">We’d love to chat with you – book in a quick call</a>
</section>