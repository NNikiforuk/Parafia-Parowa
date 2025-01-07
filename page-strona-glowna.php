<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="hero" style="background-image: url('http://localhost:8000/wp-content/uploads/2025/01/panorama-scaled.webp')">
                <div class="overlay" style="min-height: 800px">
                    <div class="hero-items">
                        <h1>RZYMSKOKATOLICKA PARAFIA ŚW. ANTONIEGO PADEWSKIEGO W PAROWEJ</h1>
                        <p>Znajdź spokój i duchowe wsparcie w <span>Domu Bożym</span></p>
                    </div>
                </div>
            </section>
            <section class="home-blog" id="aktualnosci">
                <h2>Aktualności</h2>
                <div class="container">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
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
                <div class="all-news">
                    <a class="all-news" href="http://localhost:8000/aktualnosci">Wszystkie aktualności</a>
                </div>
    </div>
    </section>
    <section class="masses" id="msze">
        <h2>Msze święte</h2>
        <div class="container">
            <p><span>W tygodniu:</span> 18:00</p>
            <p><span>W niedziele:</span> 08:00 i 10:00</p>
        </div>
    </section>
    <section class="about" id="o-parafii">
        <h2>O parafii</h2>
        <div class="container">
            <p>Kościół w Parowej znajduje się w centralnej części wsi, przy głównej drodze, po jej zachodniej stronie. Jego historia sięga prawdopodobnie 1498 roku. Przebudowany został w drugiej połowie XVIII wieku, natomiast w 1901 r. zyskał wieżę.</p>
            <p class="center-par">Ochroną konserwatorską objęto wiele elementów tego zabytku, w tym: bryłę budynku, kształt i rodzaj pokrycia dachu, hełm wieży, układ i wystrój wnętrza, sklepienia i stropy, empory, kształt otworów okiennych i drzwiowych, oryginalna stolarka okienna i drzwiowa oraz układ i wystrój architektoniczny elewacji.</p>
            <p>W kościele znajdują się również wyjątkowe organy, wykonane w 1872 roku przez znanego na Śląsku budowniczego organów, G. Geisslera z Eilenburga.</p>
            <div class="gallery">
                <?php
                get_template_part('parts/gallery');
                ?>
            </div>
        </div>
    </section>
    <section class="renovation" id="remont">
        <h2>Remont wieży kościelnej</h2>
        <div class="container">
            <div class="accordion">
                <div class="accordion-item">
                    <input type="checkbox" id="item1" class="accordion-toggle">
                    <label for="item1" class="accordion-title">2019</label>
                    <div class="accordion-content">
                        <p>Wieża kościelna w Parowej jest najwyższą (62 m) i najciekawszą konstrukcją architektoniczną w regionie. Jej stan techniczny pogarsza się z roku na rok. W fatalnym stanie jest pokrycie, odeskowanie i więźba dachowa.</p>
                        <p class="additional-padding">W 2019 roku podjęto decyzję o jej remoncie. Przeprowadzono inwentaryzację oraz przygotowano projekt remontu. Ponadto uzyskano zgody konserwatora zabytków i inne niezbędne pozwolenia na prace remontowe.</p>
                        <p>Niestety, z powodu gwałtownie rosnących cen w budownictwie oraz długiego (około rocznego) czasu oczekiwania na rozpoczęcie prac przez ekipę remontową, nie udało się przystąpić do kolejnego etapu, jakim jest wykonanie remontu.</p>
                        <p class="additional-padding">Dla zobrazowania sytuacji: pierwszy kosztorys wynosił 150 tys. zł, a półtora roku później już 250 tys. zł.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="item2" class="accordion-toggle">
                    <label for="item2" class="accordion-title">2022</label>
                    <div class="accordion-content">
                        <p>Pod koniec 2022 roku sytuacja uległa zmianie. Zaktualizowany kosztorys wyniósł 210 tys. zł, a czas oczekiwania na wejście firmy budowlanej zmalał do trzech miesięcy.</p>
                        <p class="additional-padding">Podtrzymane zostały wszystkie stosowne zgody. Firma budowlana “Tomczyk” była nadal zainteresowana wykonaniem remontu. Na koncie parafialnym znajdowało się ok. 60 tys. zł, zebrane podczas zbiórek.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="item3" class="accordion-toggle">
                    <label for="item3" class="accordion-title">2023</label>
                    <div class="accordion-content">
                        <p>W styczniu 2023 na koncie parafialnym znajdowała się kwota 110 tys. zł. Parafia w Parowej otrzymała deklarację wójta gminy Osiecznica Waldemara Nalazka o wspomożeniu dotacją w wysokości 15 tys. zł.</p>
                        <p class="additional-padding">W wyniku różnych działań takich jak kiermasze, zabawa karnawałowa, bezpośrednia zbiórka wśród mieszkańców, w marcu 2023 dysponowano kwotą ponad 190 tys. zł.</p>
                        <p>Dzięki złożonemu wnioskowi do Urzędu Marszałkowskiego województwa dolnośląskiego (program finansujący remonty obiektów zabytkowych) uzyskaliśmy 60 tys zł. Kolejna dobra informacja spłynęła w maju z Ministerstwa Kultury i Dziedzictwa Narodowego. Otrzymaliśmy dodatkowe 85 tys zł.</p>
                        <p class="bold-center additional-padding">Łączna suma dotacji to aż 160 tys zł!</p>
                        <p>Po zakończeniu prac i formalnym odbiorze przez konserwatora zabytków, firma p. Rafała Tomczyka wystawiła faktury na łączną kwotę 218 tys. zł. Zostały one opłacone z otrzymanych dotacji (160 tys. zł) oraz środków własnych naszej parafii (58 tys. zł). Po tej operacji na koncie parafialnym zostało 134 tys. zł (październik 2023).</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="item4" class="accordion-toggle">
                    <label for="item4" class="accordion-title">Czas trwania remontu</label>
                    <div class="accordion-content">
                        <p>Dotacje rządzą się swoimi prawami. Dla przykładu - kiedy w kwietniu otrzymamy informację o otrzymanej dotacji, nie oznacza to natychmiastowego przelewu na konto parafialne. Jest to długoterminowa procedura.</p>
                        <p class="additional-padding">Jest bardzo wiele dokumentów do wypełnienia, podpisanie stosownych umów, aneksów, złożenie ew. wyjaśnień oraz, co bardzo ważne, prawidłowe rozliczenie dotacji. Trwa to wiele tygodni. Wymaga to współpracy parafii, wykonawcy, a także konserwatora zabytków i aż trzech zewnętrznych podmiotów finansujących remont. </p>
                        <p>Umowy oraz przelewy pieniędzy miały swój finał dopiero we wrześniu 2023, a stosowne aneksy dały nam możliwość rozliczenia całego projektu do 31 października 2023.​</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="item5" class="accordion-toggle">
                    <label for="item5" class="accordion-title">List do przyszłych pokoleń</label>
                    <div class="accordion-content">
                        <p>14 lipca 2023 to dzień, w którym zamontowany został na wieży kościelnej krzyż. Tym symbolicznym akcentem remont pokrycia dachowego dobiegł końca. Tego też dnia w kopule pod krzyżem umieszczony został list oraz fotografie dla przyszłych pokoleń. Można je zobaczyć w poniższej galerii zdjęć.​</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <input type="checkbox" id="item6" class="accordion-toggle">
                    <label for="item6" class="accordion-title">Podziękowania</label>
                    <div class="accordion-content">
                        <p>Podziękowania za zaangażowanie, pomoc i przychylność dla: wójta gminy Osiecznica Waldemara Nalazka, zastępcy wójta Damiana Ilczuka, Marszałka Województwa Dolnośląskiego Cezarego Przybylskiego, posła RP Szymona Pogody, koordynatora projektu Zenona Zatchieja, Rafała Tomczyka i jego pracowników, radnych szczebla gminnego i wojewódzkiego, parafianek i parafian w Parowej.​</p>
                    </div>
                </div>
            </div>
            <div class="bank-account">
                <p>Zostały złożone wnioski o dotację do Ministerstwa Kultury i Dziedzictwa Narodowego oraz Gminy Osiecznica. Spodziewane kwoty z dotacji w istotny sposób miały zasilić budżet remontowy, jednak nie wystarczyłyby na pokrycie wszystkich kosztów.</p>
                <p>Dlatego Rada Parafialna zwraca się z prośbą do mieszkańców Parowej, Ołoboku, Poświętnego i Bronowca o datki na ten cel. Dowolne kwoty można wpłacać bezpośrednio na konto parafii z dopiskiem “remont wieży”:</p>
                <div class="bank-details">
                    <p class="padding-bottom">KONTO BANKOWE PARAFII ŚW. ANTONIEGO PADEWSKIEGO W PAROWEJ</p>
                    <p>Santander Bank Polska S.A.</p>
                    <p class="padding-bottom">Oddział w Bolesławcu</p>
                    <p>57 1090 2590 0000 0001 3393 5601</p>
                    <button class="bank-button">Kopiuj numer</button>
                </div>
            </div>
            <div class="gallery">
                <?php
                get_template_part('parts/gallery', 'renovation');
                ?>
            </div>
        </div>
</div>
</section>
<section class="contact" id="kontakt">
    <h2>Kontakt</h2>
    <div class="container">
        <p>Rzymskokatolicka parafia pod wezwaniem św. Antoniego z Padwy w Parowej</p>
        <div class="contact-details">
            <div class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/person.svg" alt="ikona osoby" height="auto" width="22">
                <p>Proboszcz: ks. Edward Rychel</p>
            </div>
            <div class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.svg" alt="ikona pinu" height="auto" width="22">
                <p>Parowa 106, 59-724 Parowa</p>
            </div>
            <div class="contact-item pointer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="ikona telefonu" height="auto" width="22">
                <p><a href="tel:+48757321886">(+48) 75 732 1886</a></p>
            </div>
            <div class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="ikona poczty" height="auto" width="22">
                <p><a href="mailto:parafiaparowa@gmail.com">parafiaparowa@gmail.com</a></p>
            </div>
            <div class="contact-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fb.svg" alt="ikona facebook" height="auto" width="22">
                <p><a href="https://www.facebook.com/p/Parafia-%C5%9Bw-Antoniego-z-Padwy-w-Parowej-100066737314714" target="_blank">Odwiedź nas na Facebook</a></p>
            </div>
        </div>
        <p class="alert">W sprawach pilnych prosimy o kontakt telefoniczny lub wizytę po mszy świętej wieczornej lub na plebanii</p>
    </div>
</section>
</main>
</div>
</div>
<?php get_footer(); ?>