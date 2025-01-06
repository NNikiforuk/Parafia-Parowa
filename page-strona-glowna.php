<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero" style="background-image: url('http://localhost:8000/wp-content/uploads/2025/01/panorama-scaled.webp')">
                <div class="overlay" style="min-height: 650px">
                    <div class="container">
                        <div class="hero-items">
                            <h1>RZYMSKOKATOLICKA PARAFIA ŚW. ANTONIEGO PADEWSKIEGO W PAROWEJ</h1>
                            <p>Znajdź spokój i duchowe wsparcie w <span>Domu Bożym</span></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2>Aktualności</h2>
                <div class="container">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
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
                        <p>0 postów</p>
                    <?php endif; ?>
                </div>
            </section>
            <section class="masses">
                <h2>Msze święte</h2>
                <div class="container">
                    <p><span>W tygodniu:</span> 18:00</p>
                    <p><span>W niedziele:</span> 08:00 i 10:00</p>
                </div>
            </section>
            <section class="about">
                <h2>O parafii</h2>
                <div class="container">
                    <p>Kościół w Parowej znajduje się w centralnej części wsi, przy głównej drodze, po jej zachodniej stronie. Jego historia sięga prawdopodobnie 1498 roku. Przebudowany został w drugiej połowie XVIII wieku, natomiast w 1901 r. zyskał wieżę.</p>
                    <p>
                        Ochroną konserwatorską objęto wiele elementów tego zabytku, w tym: bryłę budynku, kształt i rodzaj pokrycia dachu, hełm wieży, układ i wystrój wnętrza, sklepienia i stropy, empory, kształt otworów okiennych i drzwiowych, oryginalna stolarka okienna i drzwiowa oraz układ i wystrój architektoniczny elewacji.</p>
                    <p>W kościele znajdują się również wyjątkowe organy, wykonane w 1872 roku przez znanego na Śląsku budowniczego organów, G. Geisslera z Eilenburga.</p>
                    <div class="gallery">
                        <?php
                        get_template_part('parts/gallery');
                        ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<?php get_footer(); ?>