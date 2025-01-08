<?php get_header() ?>
<div id="primary">
    <div id="main">
        <div class="single-post">
            <header>
                <h2><?php the_title(); ?></h2>
            </header>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
            <div class="all-news">
                <a class="all-news-link" href="http://localhost:8000/aktualnosci">Powrót do wszystkich aktualności</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>