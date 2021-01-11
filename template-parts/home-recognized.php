<section class="section-recognized">
            <div class="section-header">
                <span class="text-colored up-title">WHY WE'RE ONE OF THE UK'S MOST</span>
                <h2 class="text-dark">RECOGNISED PPC AGENCIES</h2>
            </div>

                <div class="advantages-container">
                        <?php
                        $advantages = get_field('advantages');
                        if( $advantages ): ?>
                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['advantage_image_1'] ); ?>" alt="" />
                                <div class="content">
                                    <?php echo $advantages['advantage_text_1']; ?>
                                </div>
                            </div>

                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['advantage_image_2'] ); ?>" alt="" />
                                <div class="content">
                                    <?php echo $advantages['advantage_text_2']; ?>
                                </div>
                            </div>

                            <div class="advantage-box">
                                <img src="<?php echo esc_url( $advantages['advantage_image_3'] ); ?>" alt="" />
                                <div class="content">
                                    <?php echo $advantages['advantage_text_3']; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                </div>
</section>