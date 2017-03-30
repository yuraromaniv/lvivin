<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row main-content">
        <div class="col l4 m3 s12">
            <div id="contactform">
                <?php echo do_shortcode( '[contact-form-7 id="42" title="Форма для замовлення дзвінка"]' ); ?>
            </div>
        </div>
        <div class="col l8 m9 s12 center">
            <div class="slogan">Створимо для Вас незабутні враження старого міста!
            </div>
            <div class="advantages center">
                <img class="advantages-img center" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/map.svg" alt="rus">
                <div>Складаємо екскурсію
                </div>
            </div>
            <div class="advantages center">
                <img class="advantages-img center" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/apartment.svg" alt="rus">
                <div>Підшукаємо найкращі апартаменти
                </div>
            </div>
            <div class="advantages center">
                <img class="advantages-img center" src="<?php echo get_template_directory_uri(); ?>/img/menu-icon/stadium.svg" alt="rus">
                <div>Порадимо найпопулярніші туристичні місця
                </div>
            </div>
            <div class="second-slogan center">Найкращі традиції Львова!</div>
        </div>
    </div>
    <div class="contact-info center">
        <div class="white-text">
            <span><img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/phone-call.svg" alt="bus"></span>
            <span class="footer-info-text">+380734650413</span>
        </div>
        <div class="white-text ">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/mail-black-envelope-symbol.svg" alt="bus">
            </span>
            <span class="footer-info-text">romaniv.yura95@gmail.com</span>
        </div>
        <div class="white-text ">
            <span>
                <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/marker.svg" alt="bus"></span>
                <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
        </div>
    </div>
</div><!-- /main-backgroung -->

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/second-bg.jpg);" class="second-block ">
    <div class="container second-content">
        <div class="sign-line white-text">НОВИНКИ</div>
        <div class="line-main">
            <div class="block-line"></div>
        </div>
        <div class="row fix-row-bot">
            <?php
                $args = array(
                    'post_type' => array('excursions', 'bus_excursions', 'world_tours'),
                    'posts_per_page' => 5,
                    'publish' => true,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $post_count = 0;
                $query = new WP_Query( $args );
                if( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        if ( $post_count == 0 ) {
                            echo '
                                <div class="col l5 m6 news-pad">
                                    <a href="' . get_the_permalink() . '">
                                        <div class="top-news">
                                            <img class="top-news-img img-border" src="' . get_the_post_thumbnail_url( '', '450x300' ) . '" alt="eng">
                                            <div class="news-description news-big-sign white-text">' . get_the_title() . '</div>
                                            <div class="line">
                                                <div class="block-line"></div>
                                            </div>
                                            <div class="news-description white-text">' . short_post_desc( 375 ) . '</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col l7 m6 news-pad">';
                        }
                        else if ( $post_count > 0 && $post_count < 4) {
                            echo '
                                <div class="col l6 m6">
                                    <a href="' . get_the_permalink() . '">
                                        <div class="top-news">
                                            <img class="top-news-img" src="' . get_the_post_thumbnail_url( '', '300x200' ) . '" alt="eng">
                                            <div class="news-description fix-title white-text">' . get_the_title() . '</div>
                                            <div class="line">
                                                <div class="block-line"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>';
                        }
                        else {
                            echo '
                                <div class="col l6 m6">
                                    <a href="' . get_the_permalink() . '">
                                        <div class="top-news">
                                            <img class="top-news-img" src="' . get_the_post_thumbnail_url( '', '300x200' ) . '" alt="eng">
                                            <div class="news-description  white-text">' . get_the_title() . '</div>
                                            <div class="line">
                                                <div class="block-line"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>'; 
                        }
                        $post_count++;
                    } //end while
                } //end if
            ?>
        </div>
    </div>
</div>

<?php
    $query = new WP_Query( 
        array( 'p' => 214 )
    );
    if( $query->have_posts() ) {
        echo '
        <div style="height:50px; position:absolute; margin-top:-80px;" id="anchor"></div>
        <div style="background-image: url(' . get_template_directory_uri() . '/img/bg/third-bg.jpg);" class="third-block">
            <div class="container third-content">
                <div class="sign-line">ПРО НАС</div>
                <div class="line-main">
                    <div class="block-line-black "></div>
                </div>';
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '
                        <div class="about-text">' .
                            get_the_content() . '
                        </div>';
                } //end while
                echo '
                <div id="hypercomments_widget"></div>
                <script type="text/javascript">
                    _hcwp = window._hcwp || [];
                    _hcwp.push({widget:"Stream", widget_id: 88089, limit:4});
                    (function() {
                    if("HC_LOAD_INIT" in window)return;
                    HC_LOAD_INIT = true;
                    var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                    var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                    hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/88089/"+lang+"/widget.js";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hcc, s.nextSibling);
                    })();
                </script>
            </div>
        </div>';
    } //end if
?>
