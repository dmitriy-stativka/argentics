<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="gameDev-service">
    <div class="container">
        <div class="main-top main-top--dark gameDev-service__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?> </p>
        </div>
        <ul class="gameDev-service__box">
            <?php 
                while (have_rows('tabs')) : the_row(); ?>
                    <?php
                        $title_of_tab = get_sub_field('title_of_tab');
                        $description_of_tab = get_sub_field('description_of_tab');
                    ?>

                    <li class="gameDev-service__item">
                        <div class="gameDev-service__header accordion">
                            <span class="gameDev-service__title"><?php echo $title_of_tab; ?></span>
                            <span class="gameDev-service__icon"></span>
                        </div>
                        <div class="gameDev-service__hide panel">
                            <div class="gameDev-service__text"><?php echo $description_of_tab; ?></div>
                        </div>
                    </li>

                <?php endwhile;
            ?>
        </ul>
    </div>
</section>