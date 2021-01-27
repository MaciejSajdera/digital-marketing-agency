
<?php
echo '<div class="post-navigation">';
			?>
				<div>
				<?php previous_post_link('%link', '<span class="post-navigation__prev text-colored">Previous</span> <p>%title</p>'); ?>
			</div>

				<div>

				<?php next_post_link('%link', '<span class="post-navigation__next text-colored">Next</span> <p>%title</p>'); ?>
				</div>

					<?php
            echo '</div>';
            
?>