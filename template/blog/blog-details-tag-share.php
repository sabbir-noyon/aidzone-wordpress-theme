<div class="postbox-details-share mb-50">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="postbox-details-tag-content d-flex align-items-center">
            <h3 class="postbox-details-tag-title"><?php echo esc_html__('Tags') ; ?>: </h3>
            <div class="tagcloud postbox-details-tag">
                <?php aidzone_tag(); ?>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="postbox-details-social d-flex align-items-center justify-content-md-end">
            <h3 class="postbox-details-tag-title"><?php echo esc_html__('Share') ; ?>: </h3>

            <a href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank">
                <i class="fa-brands fa-pinterest-p"></i>
            </a>
            <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank">
                <i class="fa-brands fa-twitter"></i>
            </a>

            </div>
        </div>
    </div>
</div>