<div id="popular-slider">
    <div id="gallery">
        <div id="panel">
            <img id="largeImage" src="<?php echo get_the_post_thumbnail_url( '', '600x400' ); ?>" alt="Зображення" />
        </div>
        <div id="thumbs">
            <?php
                if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                    $featured_images = $dynamic_featured_image->get_featured_images();
                    if ( $featured_images ) {
                        echo '<img src="' . get_the_post_thumbnail_url( '', '600x400' ) . '" alt="Зображення" />';
                    }
                }
                foreach( $featured_images as $img ) {
                    $post_id = $img['attachment_id'];
                    echo '<img src="' . wp_get_attachment_image_url( $post_id, '600x400' ) . '" alt="Зображення">';
                }
            ?>
        </div>
    </div>
</div>