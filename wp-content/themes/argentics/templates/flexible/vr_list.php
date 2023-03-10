<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="vr-second main-second main-second--animation">
    <div class="container">
        <div class="main-top vr-second__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <p class="main-top__text"><?php echo $description;?></p>
        </div>
        <ul class="vr-second__list vr-list">


            <?php if (have_rows('items')):
                while (have_rows('items')) : the_row(); 
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>
                    
                    <li class="vr-list__item">
                        <div class="main-top vr-list__top">
                        <p class="main-top__title"><?php echo $title;?></p>
                        <p class="main-top__text"><?php echo $text;?></p>
                        </div>
                        <ul class="vr-sublist">
                            <?php if (have_rows('images')):
                                while (have_rows('images')) : the_row(); 
                                    $image = get_sub_field('images');
                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                ?>
                                    <li class="vr-sublist__item">
                                        <span class="vr-sublist__title">
                                        <img class="vr-sublist__icon" src="<?php echo $image; ?>" alt="">
                                        <?php echo $title;?></span>
                                        <p class="vr-sublist__text"><?php echo $text;?></p>
                                    </li>
                                <?php endwhile;
                                endif; 
                            ?>
                        </ul>
                    </li>


                <?php endwhile;
                endif; 
            ?>

        </ul>
    </div>
</section>