<?php 
    $post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('postbox-item '); ?>>
    <?php if(has_post_thumbnail()) : ?>
        <div class="postbox-thumb p-relative">
            <?php the_post_thumbnail(); ?>
            <span><?php the_time('d'); ?><br><?php the_time('M'); ?></span>
            <?php if(!empty($post_format_url)) : ?>
            <div class="postbox-video">
                <a class="popup-video" href="<?php echo esc_url($post_format_url); ?>">
                    <i class="fa-sharp-duotone fa-solid fa-play"></i>
                </a>
            </div>
            <?php endif; ?>    
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