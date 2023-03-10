<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $background = get_sub_field('background');
    $class_list = get_sub_field('class_list');
?>
<section class="list-sec list-sec--game" style="background-image: url(<?php echo $background;?>)">
    <div class="container">
        <div class="list-sec__box">
            <div class="main-top main-top--dark list-sec__top">
                <p class="main-top__title"><?php echo $title;?></p>
                <p class="main-top__text"><?php echo $description;?></p>
            </div>
            <ul class="list-sec__inner <?php echo $class_list;?>">
                <?php 
                    while (have_rows('team_list')) : the_row(); ?>
                        <?php
                            $position = get_sub_field('position');
                            $description = get_sub_field('description');
                            $image_decoration = get_sub_field('image_decoration');
                            $image_or_text = get_sub_field('image_or_text');
                        ?>

                        <?php 
                            if($image_or_text != 1){ ?>
                                <li class="list-sec__image">
                                    <picture>
                                        <img width="490" height="816" src="<?php echo $image_decoration; ?>" alt="image">
                                    </picture>
                                </li>
                            <?php }else{ ?>
                                <li class="list-sec__item">
                                    <p class="list-sec__title">
                                        <span>#</span> <?php echo $position;?></p>
                                    <p class="list-sec__text"><?php echo $description;?></p>
                                </li>
                            <?php }
                        ?>

                        
                    <?php endwhile;
                ?>
            </ul>


            <?php if (have_rows('more_team_info')): ?>
                <div class="list-sec__bottom">
                    <span class="list-sec__more accordion">
                        More Team Info
                        <svg class="arrow-icon" width="24" height="24">
                            <use href="img/sprite/sprite.svg#arrow-bottom"></use>
                        </svg>
                    </span>
                    <ul class="list-sec__inner panel">
                        <?php 
                            while (have_rows('more_team_info')) : the_row(); ?>
                                <?php
                                    $position = get_sub_field('position');
                                    $description = get_sub_field('description');
                                ?>

                                <li class="list-sec__item">
                                    <p class="list-sec__title">
                                    <span>#</span> <?php echo $position;?></p>
                                    <p class="list-sec__text"><?php echo $description;?></p>
                                </li>
                            <?php endwhile;
                        ?>
                    </ul>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>