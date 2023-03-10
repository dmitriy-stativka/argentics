<section class="contact-second">
    <div class="container">
        <ul class="contact-second__box">
            <?php if (have_rows('list')):
                while (have_rows('list')) : the_row(); ?>
                    <?php
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $text_button = get_sub_field('text_button');
                        $link_of_button = get_sub_field('link_of_button');
                    ?>

                    <li class="contact-second__item">
                        <span class="contact-second__title"><?php echo $title;?></span>
                        <p class="contact-second__text"><?php echo $description;?></p>
                        <a href="<?php echo $link_of_button;?>" class="contact-second__link"><?php echo $text_button;?></a>
                    </li>

                <?php endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>