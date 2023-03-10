<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $class = get_sub_field('class');
?>
<section class="<?php echo $class;?>">
    <div class="container">
        <div class="main-top index-works__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="grid-layout">
            <?php $i = 1; if (have_rows('grid_images')):
                while (have_rows('grid_images')) : the_row(); ?>
                
                    <li class="grid-layout__row <?php if($i == 1){echo 'first-row';}elseif($i == 2){echo 'second-row';}elseif($i == 3){echo 'third-row';}?>">

                        <ul id="portfolioGallery<?php echo $i;?>" class="grid-layout__row-list <?php if($i == 1){echo 'first-row__list';}elseif($i == 2){echo 'second-row__list';}elseif($i == 3){echo 'third-row__list';}?>">
                            <?php if (have_rows('row_image')):
                                while (have_rows('row_image')) : the_row(); 
                                    $decoration = get_sub_field('decoration');
                                ?>
                                    <li class="grid-layout__row-coll" data-src="<?php echo get_sub_field('image');?>">
                                        <div class="grid-layout__bg">
                                            <picture>
                                                <img src="<?php echo get_sub_field('image');?>" alt="background">
                                            </picture>
                                        </div>

                                        <?php if($decoration){ ?>
                                            <div class="grid-layout__hero">
                                                <picture>
                                                    <img src="<?php echo get_sub_field('decoration');?>" alt="hero-image">
                                                </picture>
                                            </div>
                                        <?php }?>
                                    </li>
                            
                                <?php endwhile;
                                endif; 
                            ?>
                        </ul>
                    </li>
                <?php $i++; endwhile;
                endif; 
            ?>
        </ul>


        <?php
            if (have_rows('more_row_image')): ?>
                <span class="more-works">More Works</span>
                <ul class="grid-layout-more" id="portfolioGalleryMore">
                    <?php while (have_rows('more_row_image')) : the_row(); ?>
                        <li class="grid-layout-more-item" data-src="<?php the_sub_field('more_image'); ?>">
                            <picture>
                                <img src="<?php the_sub_field('more_image'); ?>" alt="">
                            </picture>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; 
        ?>
    </div>
</section>