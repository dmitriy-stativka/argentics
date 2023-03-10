<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="gameDev-second main-second main-second--animation">
    <div class="container">
        <div class="main-top gameDev-second__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="gameDev-list">
            <?php 
                while (have_rows('services')) : the_row(); ?>
                    <?php
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $icon = get_sub_field('icon');
                    ?>
                     <li class="gameDev-list__item">
                        <img class="gameDev-list__icon" src="<?php echo $icon;?>" alt="">
                        <p class="gameDev-list__title"><?php echo $title;?> </p>
                        <p class="gameDev-list__text"><?php echo $description;?></p>
                    </li>
                <?php endwhile;
            ?>
        </ul>
    </div>
</section>