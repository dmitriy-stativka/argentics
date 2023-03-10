<?php 
    $title = get_sub_field('title');
    $bg = get_sub_field('bg');
?>

<section class="index-first" style="background-image: url(<?php echo $bg; ?>)">
    <div class="container">
        <div class="index-first__box">
            <h1 class="index-first__title"><?php echo $title;?></h1>
            <ul class="index-first__list">
                <?php if (have_rows('hero_list')):
                    while (have_rows('hero_list')) : the_row(); ?>
                        <li class="index-first__item">
                            <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                            <span class="index-first__span"><?php echo get_sub_field('title');?></span>
                        </li>
                    <?php endwhile;
                    endif; 
                ?>
            </ul>
        </div>
    </div>
</section>