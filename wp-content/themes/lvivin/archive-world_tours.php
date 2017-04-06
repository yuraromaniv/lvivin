<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row main-content-bus fix-row-bot">
        <div class="col offset-l1 l6 offset-l1 m9 s12">
            <div class="bus-traver">
                Метою нашої компанії є надання туристичних послуг на високому рівні. Нашою візитною карткою є уважне і доброзичливе ставлення до клієнтів, адже наші працівники прагнуть задовільнити всі їх побажання. 
                Ми пропонуємо підбір турів для відпочинку в будь-якій країні світу, опис курортів, готелів та екскурсій, корисна інформація про країну.
                Ми працюємо з усіма категоріями клієнтів – від студентів до туристів, які розраховують на тури VIP рівня. Професійни підхід допоможуть Вам в правильному підборі Вашого відпочинку і відпочинку Вашої сім'ї.
            </div>
            <div class="slogan-bus">
                Створимо для Вас незабутні враження!
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
            <?php
                if ( have_posts() ) :
                    echo '
                    <div class="col l12 m12 s12 news-pad">';
                    while ( have_posts() ) : the_post(); // Start the Loop
                        show_excursions();
                    endwhile; //end while
                    echo '
                    </div>
                    <div class="col l12">
                        <div class="clear"></div>';
                        the_posts_pagination( $pagination_args );
                        wp_reset_postdata();
                    echo '
                    </div>';
                    endif; //end if
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
