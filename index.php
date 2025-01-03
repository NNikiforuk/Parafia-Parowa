<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Aktualności</h1>
            <div class="container">
                <div class="blog-items">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                            get_template_part('parts/content');
                        endwhile;
                    ?>
                    <?php
                    else: ?>
                        <p>Nothing yet to be displayed!</p>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>