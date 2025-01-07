<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="news-list">
                <h2>Aktualności</h2>
                <div class="container">
                    <?php
                    if (have_posts()):
                        while (have_posts()) : the_post();
                            get_template_part('parts/content');
                        endwhile;
                    ?>
                    <?php
                    else: ?>
                        <p>Brak postów</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>