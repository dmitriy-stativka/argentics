<?php
    $favorite_posts = get_sub_field( 'favorite_posts' );
?>

<section class="main-blog main-blog--single">
    <div class="container container--blog">
        <ul class="main-blog__list">

            <?php 
                foreach ( $favorite_posts as $id ) {
                    $name = get_the_title($id); 
                    $image = get_field('image', $id);
                    $minidescription = get_field('minidescription', $id);
                    $date = get_the_date('l, F d', $id);
                ?>

                    <li class="main-blog__item">
                        <a href="<?php echo get_the_permalink($id); ?>" class="main-blog__inner">
                            <div class="main-blog__image">
                                <picture>
                                    <img width='460' height='360' src='<?php echo $image; ?>' alt='image'>
                                </picture>
                            </div>
                            <span class="main-blog__date"><?php echo $date; ?></span>
                            <span class="main-blog__title"><?php echo $name;?></span>
                            <p class="main-blog__text"><?php echo $minidescription;?></p>
                        </a>
                    </li>
            <?php } ?>

        </ul>
    </div>
</section>