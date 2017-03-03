<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row main-content-bus fix-row-bot">
        <div class="col offset-l1 l6 offset-l1 m9 s12">
            <div class="bus-traver">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates at rerum harum iusto repellat temporibus ad, ratione ducimus alias consequuntur error repudiandae pariatur ipsam. Blanditiis porro laudantium commodi, quis ad.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ullam iste, ipsum quasi et, laudantium repudiandae aspernatur non, ad obcaecati sed, dicta fugit eos cumque fugiat cupiditate! Quas nulla, minus.
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
                    $args = array(
                        'post_type' => 'excursions',
                        'posts_per_page' => 6,
                        'publish' => true,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $query = new WP_Query( $args );
                    if( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            show_excursions();
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div style=" background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/fifth-bg.jpg);" class="fifth-block">
    
    <?php
        //our-partners
        get_template_part('/template-parts/our', 'partners');
    ?>

    <div class="six-content">
        <div class="sign-line white-text center contact-sign">КОНТАКТИ</div>
    </div>
    <div id='mapkit-9997'></div>
</div>

<?php get_footer(); ?>
