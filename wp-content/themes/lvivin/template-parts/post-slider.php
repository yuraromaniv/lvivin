<div id="popular-slider">
    <div id="gallery" class="row">
        <div id="panel" style="padding:2px;" class=" col l12 m12 s12">
            <img id="largeImage" src="<?php echo get_the_post_thumbnail_url( '', '600x400' ); ?>" alt="Зображення" />
        </div>
        <div id="thumbs">
        
            <?php
                if( class_exists('Dynamic_Featured_Image') ) {
                    global $dynamic_featured_image;
                    $featured_images = $dynamic_featured_image->get_featured_images();
                    if ( $featured_images ) {
                        echo '<div style="padding:2px;" class="col m3 s3 l3"><img src="' . get_the_post_thumbnail_url( '', '600x400' ) . '" alt="Зображення" /></div>';
                    }
                }
                foreach( $featured_images as $img ) {
                    $post_id = $img['attachment_id'];
                    echo '<div style="padding:2px;" class="col s3 m3 l3"><img src="' . wp_get_attachment_image_url( $post_id, '600x400' ) . '" alt="Зображення"></div>';
                }
            ?>
            
        </div>
    </div>
</div>