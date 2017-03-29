<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row main-content-bus fix-row-bot">
        <div class="col offset-l1 l6 offset-l1 m9 s12">
            <div class="bus-traver">
                Lorem ipsum dolor sit amet, tation tincidunt vituperatoribus sit ex. Ex modus platonem duo, consetetur disputando duo et, per no case constituto. Ex ius mentitum necessitatibus.
                Quod ludus civibus pro in. Vel nobis patrioque deterruisset no, te nam legendos quaestio, odio eros ne sea.Harum labitur electram ex qui, corrumpit sadipscing scriptorem mea ex.
                Homero phaedrum convenire his id, justo veniam eu eam. Partem epicurei menandri est ut. Duo numquam fabellas ad, cibo possit persecuti per no. Vis modus dicant essent cu.
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
