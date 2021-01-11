<section class="section-why-us">
            <div class="section-header">
                <h2 class="text-dark">WHY YBA PPC?</h2>
                <span class="text-colored up-title">We’re all about transparency, honesty & solid partnerships with the right clients.</span>
                <p> The only metric that matters is generating you many times your investment in leads & enquiries </p>
            </div>

                <div class="advantages-container why-us-container">
                        <?php
                        $advantages = get_field('why_us');
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
</section>