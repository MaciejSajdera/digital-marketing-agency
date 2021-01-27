<?php $apply_now = get_field('apply_now'); ?>

    <div class="apply-banner" style="background-image: url(<?php echo $apply_now["background"]; ?>);background-repeat: no-repeat; background-size: cover;">
        <div class="arrow-down arrow-down__bg-body"></div>
        <h2 class="text-light">
            <?php echo $apply_now["header"] ?>
        </h2>
        <p class="text-light">
        <?php echo $apply_now["content"] ?>
        </p>
        <a class="orange-oval-button apply-button" href="">
        <?php echo $apply_now["button"] ?>
        </a>

    </div>
