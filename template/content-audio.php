<?php 
    $post_format_url = function_exists('get_field') ? get_field('post_format_url') : '';

?>


<article id="post-<?php the_ID(); ?>" <?php post_class('postbox-item '); ?>>
    <?php if(!empty($post_format_url)) : ?>
        <div class="postbox-thumb p-relative ratio ratio-16x9">
            <?php echo wp_oembed_get($post_format_url); ?>
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