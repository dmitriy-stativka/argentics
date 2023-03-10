<?php
    $title = get_sub_field('title');
    $description = get_sub_field('desc$description');
    $picture = get_sub_field('picture');
    $class = get_sub_field('class');
?>
<section class="index-services <?php echo $class;?>">
    <div class="container">
        <div class="main-top index-services__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <?php if($description){ ?>
                <p class="main-top__text"><?php echo $description;?></p>
            <?php }?>
        </div>

        <div class="index-services__box">
            <?php if($picture){ ?>
                <div class="index-services__image">
                    <picture>
                        <img width="336" height="700" src="<?php echo $picture;?>" alt="hero">
                    </picture>
                </div>
            <?php }?>

            <ul class="index-services__list">
                <?php if (have_rows('services_list')):
                    while (have_rows('services_list')) : the_row(); ?>
                        <?php
                            $icon = get_sub_field('icon');
                            $title_secvice = get_sub_field('title_secvice');
                            $description = get_sub_field('description');
                        ?>

                        <li class="index-services__item index-massege_box">
                            <img src="<?php echo $icon;?>" alt="">
                            <span class="index-services__title"><?php echo $title_secvice;?></span>
                            <p class="index-services__text"><?php echo $description;?> <span class="index-more-info">+</span></p>
                            <p class="index-massege"><?php echo get_sub_field('popup_text');?><span class="index-massege-close">×</span></p>
                        </li>
                    <?php endwhile;
                    endif; 
                ?>
            </ul>
        </div>
    </div>
</section>