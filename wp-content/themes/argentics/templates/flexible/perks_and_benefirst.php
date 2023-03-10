<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="career-second">
    <div class="container">
        <div class="main-top career-second__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>
        <ul class="career-second__list">
            <?php if (have_rows('perks_list')):
                while (have_rows('perks_list')) : the_row(); 
                    $icon = get_sub_field('icon');
                    $text = get_sub_field('text');
                ?>

                    <li class="career-second__item">
                        <div class="career-second__inner">
                            <img class="career-second__icon" src="<?php echo $icon;?>" alt="">
                        </div>
                        <p class="career-second__text"><?php echo $text;?></p>
                    </li>
            
                <?php endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>