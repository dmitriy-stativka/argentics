<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="art2D-second main-second main-second--animation">
    <div class="container">
        <div class="main-top art2D-second__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="art2D-second__box main-art">
            <?php if (have_rows('list_of_services')):
                while (have_rows('list_of_services')) : the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                ?>

                    <li class="main-art__item">
                        <div class="main-art__image">
                            <picture>
                                <img width="480" height="322" src="<?php echo $image;?>" alt="">
                            </picture>
                        </div>
                        <div class="main-art__body">
                            <p class="main-art__title"><?php echo $title;?></p>
                            <p class="main-art__text"><?php echo $text;?></p>
                        </div>
                        <?php if($link){ ?>
                            <a href="<?php echo $link;?>" class="main-art__more">Read more</a>
                        <?php } ?>
                    </li>
                <?php endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>