<?php
    $title = get_sub_field('title');
    $background = get_sub_field('background');
    $description = get_sub_field('description');
?>
<section class="main-approach" style="background-image: url(<?php echo $background; ?>);">
    <div class="container">
        <div class="main-top main-approach__top">
          <p class="main-top__title"><?php echo $title; ?></p>
          <p class="main-top__text"><?php echo $description; ?></p>
        </div>

        <ul class="main-approach__list">
            <?php 
                while (have_rows('list')) : the_row(); ?>
                    <?php
                        $title_of_item = get_sub_field('title_of_item');
                        $description_of_item = get_sub_field('description_of_item');
                    ?>
                     
                    <li class="main-approach__item">
                        <svg class="main-approach__icon" width="90" height="90">
                            <use href="../wp-content/themes/argentics/img/sprite/sprite.svg#check"></use>
                        </svg>
                        <div class="main-approach__inner">
                            <span class="main-approach__title"><?php echo $title_of_item;?></span>
                            <p class="main-approach__text"><?php echo $description_of_item;?> </p>
                        </div>
                    </li>
                <?php endwhile;
            ?>
        </ul>
    </div>
</section>