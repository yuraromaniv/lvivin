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
        </div>
        <div class="second-slogan center">Найкращі традиції Львова!</div>
    </div>
    <div class="contact-info center">
        <div class="white-text ">
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
                    'post_type' => array('excursions','bus_excursions'),
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
                                            <div class="news-description  white-text">' . get_the_title() . '</div>
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
                    }
                }
            ?>
        </div>
    </div>
</div>

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/third-bg.jpg);" class="third-block">
    <div class="container third-content">
        <div class="sign-line">ПРО НАС</div>
        <div class="line-main">
            <div class="block-line-black "></div>
        </div>
        <div class="center">
            <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/img/logo/lvivin.svg" alt="eng">
        </div>
        
        <?php
            $query = new WP_Query( 
                array( 'p' => 138 )
            );
            if( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '
                        <div class="about-text">' .
                            get_the_content() . '
                        </div>';
                } //end while
            } //end if
        ?>
    </div>
</div>

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/fourth-bg.jpg); background-size: cover;" class="fourth-block">
    <div class="container fourth-content">
        <div class="sign-line white-text">ВІДГУКИ</div>
        <div class="line-main">
            <div class="block-line "></div>
        </div>

        <?php //echo do_shortcode( '[testimonial_view id=1]' ); ?>

        <?php //echo do_shortcode( '[testimonial_view id=2]' ); ?>
        
        <div class="comment-bg ">
            <div class="row comment-pad">
                <div class="col l3 m3 ">
                    <div class="">
                        <img class="comment-img" src="<?php echo get_template_directory_uri(); ?>/img/comment/comment1.jpg" alt="comment">
                    </div>
                </div>
                <div class="col l9 m9">
                    <div class="black-text comment-text" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit deleniti eum aperiam porro beatae totam quos maiores praesentium, dicta exercitationem!</div>
                    <div class="comment-date">28.06.1995</div>
                </div>
            </div>
        </div>
        <div class="comment-bg ">
            <div class="row comment-pad">
                <div class="col l3 m3">
                    <div class="">
                        <img class="comment-img" src="<?php echo get_template_directory_uri(); ?>/img/comment/comment2.jpg" alt="comment">
                    </div>
                </div>
                <div class="col l9 m9">
                    <div class="black-text comment-text" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit deleniti eum aperiam porro beatae totam quos maiores praesentium, dicta exercitationem!</div>
                    <div class="comment-date">28.06.1997</div>
                </div>
            </div>
        </div>
        <div class="comment-bg ">
            <div class="row comment-pad">
                <div class="col l3 m3">
                    <div class="">
                        <img class="comment-img" src="<?php echo get_template_directory_uri(); ?>/img/comment/comment3.jpg" alt="comment">
                    </div>
                </div>
                <div class="col l9 m9">
                    <div class="black-text comment-text" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur molestiae sit cum illum nam quas, debitis adipisci odit suscipit deleniti eum aperiam porro beatae totam quos maiores praesentium, dicta exercitationem!</div>
                    <div class="comment-date">28.06.1996</div>
                </div>
            </div>
        </div>
        <div class="leave-comment">
            <div class="sign-line white-text">ЗАЛИШИТИ ВІДГУК</div>
            <div class="line-main">
                <div class="block-line "></div>
            </div>
            <form id="contactform-comment"> 
                <div class="row contactform-pad">
                    <div class="col l5 m5 і12">
                        <input  class="custom-input" name="name" placeholder="Ваше імя" required="" tabindex="1" type="text"> 
                        <input  class="custom-input" placeholder="Ваш телефон" required="" tabindex="2" type="tel" name="usrtel"> 
                        <div  class="col offset-l1 l6 offset-m1 m6  s12 center hide-on-med-and-up">  <textarea style="width: 100%;"  class="comment-area" placeholder="Коментар" required="" tabindex="2" > </textarea> </div>
                        <input class="btn center comment-btn form-button" name="submit"  tabindex="5" value="Відправити" type="submit">   
                    </div>
                    <div  class="col offset-l1 l6 offset-m1 m6  s12 center hide-on-small-only">  <textarea style="width: 100%;"  class="comment-area" placeholder="Коментар" required="" tabindex="2" > </textarea> </div>
                </div>
            </form> 
        </div>
    </div>
</div>

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/fifth-bg.jpg);" class="fifth-block">

    <?php
        //our-partners
        get_template_part('/template-parts/our', 'partners');
    ?>

    <div class="six-content">
        <div class="sign-line white-text center contact-sign">КОНТАКТИ</div>
    </div>
    <div id='mapkit-9997'></div>
</div>