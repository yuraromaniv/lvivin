<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row main-content-bus fix-row-bot">
        <div class="col offset-l1 l6 offset-l1 m9 s12">
            <div class="bus-traver">
                Під час екскурсійних турів ви зможете побачити, як кожна епоха залишила свій слід в історичних пам’ятках міста. Провівши вікенд у Львові ви матимете можливість проникнутись духом міста, відчути на собі його незвичну, старовинну атмосферу та традиції. Різноманітні екскурсії на будь-який смак, індивідуальні або групові, денні або вечірні, міські та заміські, гастрономічні та тематичні екскурсії нададуть вам можливість відчути історію у всій величі та красі.<br>
                Маршрути оглядових екскурсій проходять вулицями середньовічного міста, відомій Площі Ринок, проспектами та вулицями, які наповненні історією. Ви побачите найголовніші пам'ятки Львова.
            </div>
            <div class="slogan-bus">
                Створимо для Вас незабутні враження старого міста!
            </div>
        </div>
        <div class="col l3 offset-l1 m3 s12">
            <div id="contactform">
                <?php echo do_shortcode( '[contact-form-7 id="42" title="Форма для замовлення дзвінка"]' ); ?>
            </div>
        </div>
    </div>
    <div class="contact-info-bus">
        <div class="row">
            <div class="col l4 s12 offset-l1">
                <div class="white-text">
                    <span>
                        <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/phone-call.svg" alt="bus">
                    </span>
                    <span class="footer-info-text">+380734650413</span>
                </div>
            </div>
            <div class="col l4 s12">
                <div class="white-text">
                    <span>
                        <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/mail-black-envelope-symbol.svg" alt="bus">
                    </span>
                    <span class="footer-info-text">romaniv.yura95@gmail.com</span>
                </div>
            </div>
            <div class="col l3 s12">
                <div class="white-text ">
                    <span>
                        <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/marker.svg" alt="bus">
                    </span>
                    <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
                </div>
            </div>
        </div>
    </div>
</div><!-- /main-backgroung -->

<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/second-bg.jpg);" class="second-block ">
    <div class="container second-content">
        <div class="sign-line white-text">ЕКСКУРСІЇ</div>
        <div class="line-main">
            <div class="block-line"></div>
        </div>
        <div class="row fix-row-bot">
            <div class="col l12 m12 І12 news-pad">
                <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); // Start the Loop
                            show_excursions();
                        endwhile; //end while
                        echo '<div class="clear"></div>';
                        the_posts_pagination( $pagination_args );
                        wp_reset_postdata();
                    endif; //end if
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
