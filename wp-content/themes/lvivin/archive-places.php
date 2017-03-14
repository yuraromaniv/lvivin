<?php get_header(); ?>

<div class="main-bg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg/main.jpg);">
    <div class="row container popular-content fix-row-bot">
        <div style="margin-top: 100px;" class="col l12">
            <div class="sign-line white-text">ПОПУЛЯРНІ МІСЦЯ</div>
            <div class="line-main">
                <div class="block-line"></div>
            </div>
        </div>
        
        <?php
            $query = new WP_Query( 
                array( 'p' => 122 )
            );
            if( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '
                        <div class="col l6 m12 s12">';
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
            wp_reset_postdata();
        ?>
    </div>
</div><!-- /main-backgroung -->
<div style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg/second-bg.jpg);" class="second-block">
    <div class="container second-content">
        <div class="sign-line white-text">ВАРТО ВІДВІДАТИ</div>
        <div class="line-main">
            <div class="block-line"></div>
        </div>
        <div class="row fix-row-bot">
            <div class="col l12 m12 І12 news-pad">
                <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); // Start the Loop
                            echo '
                                <div class="top-news">
                                    <a href="' . get_the_permalink() . '">
                                        <div class="col l3">
                                            <img class="top-news-img img-border" src="' . get_the_post_thumbnail_url( '', '300x200' ) . '" alt="eng">
                                        </div>
                                        <div class="col l9">
                                            <div class="news-description news-big-sign white-text">' . get_the_title() . '</div>
                                            <div class="news-description white-text">' .
                                                short_post_desc( 475 ) . '
                                            </div>
                                        </div>
                                        <div class="line">
                                            <div class="block-line"></div>
                                        </div>
                                    </a>
                                </div>';
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