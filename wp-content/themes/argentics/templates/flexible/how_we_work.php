<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="about-work">
    <div class="container">
        <div class="main-top main-top--dark about-work__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>
        <ul class="about-work__list">
            <?php if (have_rows('list')): $i = 1;
                while (have_rows('list')) : the_row(); ?>
                    <?php
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                    ?>

                    <li class="about-work__item">
                        <p class="about-work__title">
                        <span class="about-work__step">Step <?php echo $i;?></span> <?php echo $title;?></p>
                        <p class="about-work__text"><?php echo $text;?></p>
                    </li>

                <?php $i++; endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>