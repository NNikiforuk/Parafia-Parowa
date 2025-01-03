<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero" style="background-image: url('http://localhost:8000/wp-content/uploads/2025/01/panorama-scaled.webp')">
                <div class="overlay" style="min-height: 800px">
                    <div class="container">
                        <div class="hero-items">
                            <h1>Lorem ipsum dolor</h1>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae voluptates soluta natus aliquid fugit hic laudantium.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
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
                            get_template_part('parts/content', 'latest-news');
                    ?>

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