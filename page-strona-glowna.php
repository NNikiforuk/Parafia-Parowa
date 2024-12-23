<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero">
                Hero
            </section>
            <section class="services">
                <h2>Services</h2>
                <div class="container">
                    <div class="services-item">
                    </div>
                    <div class="services-item">
                    </div>
                    <div class="services-item">
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Najnowsze aktualności</h2>
                <div class="container">
                    <?php

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category__in'  => array(9, 5, 10),
                        'category__not_in' => array(1)
                    );

                    $postlist = new WP_Query($args);

                    if ($postlist->have_posts()):
                        while ($postlist->have_posts()) : $postlist->the_post();
                    ?>
                            <article class="latest-news">
                                <h3><?php the_title(); ?></h3>
                                <div class="meta-info">
                                    <p>
                                        by <span><?php the_author_posts_link(); ?></span>
                                        Categories: <span><?php the_category(' '); ?></span>
                                        Tags: <?php the_tags('', ', '); ?>
                                    </p>
                                    <p><span><?php echo get_the_date(); ?></p>
                                </div>
                                <?php the_excerpt(); ?>
                            </article>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>