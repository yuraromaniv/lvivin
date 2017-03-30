<?php 
    get_header();
    echo '
    <div class="main-bg" style="background-image:url(' . get_template_directory_uri() . '/img/bg/main.jpg);">
        <div class="row container single-content fix-row-bot">';
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); // Start the Loop.
                    echo '
                    <div style="margin-top: 100px;" class="col l12 s12">
                        <div class="sign-line">' . get_the_title() . '</div>
                        <div class="line">
                            <div class="block-line-black"></div>
                        </div>
                    </div>
                    <div class="col l6 m12 s12">';
                        //our-partners
                        get_template_part('/template-parts/post', 'slider');
                    echo '
                    </div>
                    
                    <div class="world-tour-text">';
                        the_content();
                    echo '
                    </div>
                    
                    <div class="row booking">
                        <div class="col l12 m12 s12">
                            <div class="col l6 m12 s12">' .
                                do_shortcode( '[contact-form-7 id="53" title="Форма для замовлення екскурсії"]' ) . '
                            </div>
                            <div class="col l6 m12 s12">
                                <div class="single-contact center">
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/single-icon/phone-call.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">+380734650413</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/single-icon/mail-black-envelope-symbol.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">romaniv.yura95@gmail.com</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/single-icon/marker.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
                                    </div>
                                    <div class="center">
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/single-icon/fb.svg" alt="bus">
                                        </span>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/single-icon/vk.svg" alt="bus">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                endwhile;
                wp_reset_postdata();
            endif;
        echo '
        </div>
    </div>';
    get_footer();
?>