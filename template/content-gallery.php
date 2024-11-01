<?php 
    $post_gallery = function_exists('get_field') ? get_field('post_gallery') : '';
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('postbox-item '); ?>>
    <?php if(has_post_thumbnail()) : ?>
        <div class="postbox-blog-gallery-wrapper position-relative mb-30">
            <div class="swiper-container tp-blog-format-active">
                <div class="swiper-wrapper">
                    <?php foreach($post_gallery as $item) : ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($item['url']); ?>" alt="">
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>  
            <div class="swiper-button-next">Next</div>
            <div class="swiper-button-prev">Prev </div>
        </div>
    <?php endif; ?>

    <div class="postbox-content">
        <?php get_template_part('template/blog/blog-meta'); ?>
        <h3 class="postbox-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <div class="postbox-text">
            <?php the_excerpt(); ?>
        </div>
        <div class="postbox-read-more">
            <a href="<?php the_permalink(); ?>" class="tp-theme-btn"><?php echo esc_html__('Read More','aidzone'); ?></a>
        </div>
    </div>
</article>