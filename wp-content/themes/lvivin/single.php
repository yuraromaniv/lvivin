<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row container single-content fix-row-bot">
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); // Start the Loop.
        ?>
                    <div style="margin-top: 100px;" class="col l12 s12">
                        <div class="sign-line"><?php echo get_the_title(); ?></div>
                        <div class="line">
                            <div class="block-line-black"></div>
                        </div>
                    </div>
                    <div class="col l6 m12 s12">
                        <?php
                            //our-partners
                            get_template_part('/template-parts/post', 'slider');
                        ?>
                    </div>

                    <div class="col l6 m12 s12 ">
                        <div class="popular-content-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="row booking">
                        <div class="col l12">
                            <div class="col l7"> 
                                <div class="exc-des">
                                    <div class="bold-text">Початок екскурсії:</div>
                                    <div class="desc-text">Площа ринок 1</div>
                                </div>
                                <div class="exc-des">
                                    <div class="bold-text">Тривалість екскурсії::</div>
                                    <div class="desc-text">40 хв</div>
                                </div>
                                <div class="exc-des">
                                    <div class="bold-text">Розклад:</div>
                                    <div class="desc-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae aperiam repellendus, eaque neque provident quis doloribus hic, sint dolore eveniet alias quasi! Est nobis, harum. Sapiente adipisci iste saepe, nobis!
                                        <div class="bold-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit animi, facere ab repudiandae numquam dolorem nesciunt officiis </div>
                                    </div>
                                </div>
                                <div class="exc-des">
                                    <div class="bold-text">Маршрут:</div>
                                    <div class="desc-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, eum animi veniam quod facilis recusandae in ab delectus rerum! Id quas, quasi soluta earum velit consequatur quisquam expedita dolores laborum.<br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed quas id sequi quo enim eveniet delectus commodi, nostrum recusandae illo quos ex expedita dolore sint voluptatum incidunt, architecto natus laudantium.
                                    </div>
                                </div>
                                <div class="exc-des">
                                    <div class="bold-text">Ціна:</div>
                                    <div class="desc-text">100500грн</div>
                                </div>
                            </div>
                            <div class="col l4"> 
                                <?php echo do_shortcode( '[contact-form-7 id="53" title="Форма для замовлення екскурсії"]' ); ?>
                                <div class="single-contact ">
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/phone-call.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">+380734650413</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/mail-black-envelope-symbol.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">romaniv.yura95@gmail.com</span>
                                    </div>
                                    <div>
                                        <span>
                                            <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/marker.svg" alt="bus">
                                        </span>
                                        <span class="footer-info-text">м. Львів, вул. Зелена, 82</span>
                                    </div>
                                    <div class="center">
                                        <span>
                                            <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/fb.svg" alt="bus">
                                        </span>
                                        <span>
                                            <img class="footer-info-img" src="<?php echo get_template_directory_uri(); ?>/img/footer/vk.svg" alt="bus">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
</div><!-- /main-backgroung -->
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
