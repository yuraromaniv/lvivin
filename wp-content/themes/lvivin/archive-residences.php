<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row container popular-content fix-row-bot">
        <div style="margin-top: 100px;" class="col l12">
            <div class="sign-line white-text">ПРОЖИВАННЯ</div>
            <div class="line-main">
                <div class="block-line"></div>
            </div>
        </div>
        <?php
            $query = new WP_Query( 
                array( 'p' => 118 )
            );
            if( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '
                        <div class="col l6 m12 s12 fix-top">';
                            //our-partners
                            get_template_part('/template-parts/post', 'slider');
                    echo '
                        </div>
                        <div class="col l6 m12 s12 ">
                            <div class="popular-content-text white-text">';
                                the_content();
                    echo '
                            </div>
                        </div>';
                } //end while
            } //end if
        ?>
        <div class="row booking">
            <div class="col l12">
                <div id="contactform-comment-acom">
                    <?php echo do_shortcode( '[contact-form-7 id="63" title="Форма для замовлення екскурсії по критеріям"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- /main-backgroung -->
<?php get_footer(); ?>