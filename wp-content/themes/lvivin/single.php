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
                        if ( get_post_meta( $post->ID, 'розклад', true ) ) {
                            echo '
                            <div class="exc-des popular-content-text">
                                <div class="bold-text">Розклад:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'розклад', true ) . '
                                </div>
                            </div>';
                        }
                        if ( get_post_meta( $post->ID, 'маршрут', true ) ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Маршрут:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'маршрут', true ) . '
                                </div>
                            </div>';
                        }
                        if ( get_post_meta( $post->ID, 'тривалість_екскурсії', true ) ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Тривалість екскурсії:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'тривалість_екскурсії', true ) . '
                                </div>
                            </div>';
                        }
                        /*
                        if ( get_post_meta( $post->ID, 'ціна', true ) ) {
                            echo '
                            <div class="exc-des">
                                <div class="bold-text">Ціна:</div>
                                <div class="desc-text">' .
                                    get_post_meta( $post->ID, 'ціна', true ) . '
                                </div>
                            </div>';
                        }
                        */
                        echo '
                    </div>
                    <div class="row booking">
                        <div class="col l12">
                            <div class="col l7">';
                                /*
                                if ( get_post_meta( $post->ID, 'початок_екскурсії', true ) ) {
                                    echo '
                                    <div class="exc-des">
                                        <div class="bold-text">Початок екскурсії:</div>
                                        <div class="desc-text">' .
                                            get_post_meta( $post->ID, 'початок_екскурсії', true ) . '
                                        </div>
                                    </div>';
                                }
                                */
                                if ( get_post_meta( $post->ID, 'опис', true ) ) {
                                    echo '
                                    <div class="exc-des">
                                        <div class="bold-text">Опис:</div>';
                                        $content = get_post_meta( $post->ID, 'опис', true );
                                        $content = apply_filters( 'the_content', $content );
                                        $content = str_replace( ']]>', ']]&gt;', $content );
                                        echo $content;
                                    echo '
                                    </div>
                                    
                                    <div id="hypercomments_widget"></div>
                                    <script type="text/javascript">
                                        _hcwp = window._hcwp || [];
                                        _hcwp.push({widget_id: 88089, widget:"Stream"});
                                        (function() {
                                            if("HC_LOAD_INIT" in window)return;
                                            HC_LOAD_INIT = true;
                                            var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                                            var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                                            hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/88089/"+lang+"/widget.js";
                                            var s = document.getElementsByTagName("script")[0];
                                            s.parentNode.insertBefore(hcc, s.nextSibling);
                                        })();
                                    </script>';
                                }
                                echo '
                            </div>
                            <div class="col l4">' .
                                do_shortcode( '[contact-form-7 id="53" title="Форма для замовлення екскурсії"]' ) . '
                                <div class="single-contact ">
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