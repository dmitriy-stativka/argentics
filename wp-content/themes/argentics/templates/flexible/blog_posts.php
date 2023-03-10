<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="best-publications">
    <div class="container">
        <div class="main-top best-publications__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="best-publications__box">
            <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 3,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $posts_query = new WP_Query($args);
                ?>
                <?php if ($posts_query->have_posts()) : ?>
                    <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                        
                        <li class="best-publications__item">
                            <a href="<?php echo get_the_permalink(); ?>" class="best-publications__wrapper">
                            <div class="best-publications__image">
                                <picture>
                                    <img width="388" height="304" src="<?php echo get_field('image');?>" alt="image">
                                </picture>
                            </div>
                            <article class="best-publications__article">
                                <span class="best-publications__date"><?php echo get_the_date('l, F d'); ?></span>
                                <p class="best-publications__title"><?php the_title();?></p>
                                <p class="best-publications__text"><?php echo get_field('minidescription');?></p>
                            </article>
                            </a>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
        </ul>


    </div>
</section>