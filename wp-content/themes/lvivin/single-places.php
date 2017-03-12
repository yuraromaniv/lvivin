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
                    <div class="col l6 m12 s12 ">';
                        $address = get_post_meta( $post->ID, 'адреса', true );
                        if ( $address ) {
                            echo '
                            <div class="exc-des popular-content-text">
                                <div class="bold-text">Адреса:</div>
                                <div class="desc-text">' .
                                    $address . '
                                </div>
                            </div>';
                        }
                        $telephone = get_post_meta( $post->ID, 'телефон', true );
                        if ( $telephone ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Телефон:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'телефон', true ) . '
                                </div>
                            </div>';
                        }
                        $work_schedule = get_post_meta( $post->ID, 'графік_роботи', true );
                        if ( $work_schedule ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Графік роботи:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'графік_роботи', true ) . '
                                </div>
                            </div>';
                        }
                        $site_url = get_post_meta( $post->ID, 'сайт', true );
                        if ( $site_url ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Сайт:</div>
                                <div class="desc-text">
                                    <a href="' . $site_url . '" class="black-text" target="_blank">' . 
                                        $site_url . '
                                    </a>
                                </div>
                            </div>';
                        }
                        echo '
                    </div>
                    <div class="row booking">
                        <div class="col l12">
                            <div class="col l7">';
                                $content = get_post_meta( $post->ID, 'опис', true );
                                if ( $content ) {
                                    echo '
                                    <div class="exc-des">';
                                        $content = apply_filters( 'the_content', $content );
                                        $content = str_replace( ']]>', ']]&gt;', $content );
                                        echo $content;
                                    echo '
                                    </div>';
                                }
                                echo '
                            </div>
                            <div class="col l4">' .
                                do_shortcode( '[contact-form-7 id="42" title="Форма для замовлення дзвінка"]' ) . '
                                <div class="single-contact ">
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/footer/phone-call.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">+380734650413</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/footer/mail-black-envelope-symbol.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">romaniv.yura95@gmail.com</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/footer/marker.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
                                    </div>
                                    <div class="center">
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/footer/fb.svg" alt="bus">
                                        </span>
                                        <span>
                                            <img class="footer-info-img" src="' . get_template_directory_uri() . '/img/footer/vk.svg" alt="bus">
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
