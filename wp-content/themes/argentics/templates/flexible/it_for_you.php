<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="for-you">
    <div class="container">
        <div class="main-top for-you__top">
            <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="for-you__list">
            <?php if (have_rows('list')):
                while (have_rows('list')) : the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                ?>

                    <li class="for-you__item">
                        <div class="for-you__item-top">
                            <img src="<?php echo $image;?>" alt="icon" class="for-you__icon">
                        </div>
                        <div class="for-you__descr">
                            <span class="for-you__title"><?php echo $title;?></span>
                            <p class="for-you__text"><?php echo $text;?> </p>
                        </div>
                    </li>
            
                <?php endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>