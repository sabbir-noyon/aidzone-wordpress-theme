<?php if(is_single()) : ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox-details-item'); ?>>
        <?php if(has_post_thumbnail()) : ?>
        <div class="postbox-thumb">
            <?php the_post_thumbnail(); ?>
            <span><?php the_time('d'); ?><br><?php the_time('M'); ?></span>
        </div>
        <?php endif; ?>
        <div class="postbox-content">
            <?php get_template_part('template/blog/blog-meta'); ?>    
        </div>
        <h3 class="postbox-title"><?php the_title(); ?></h3>
        <div class="postbox-text">
            <?php the_content(); ?>
        </div>

        <?php get_template_part('template/blog/blog-details-tag-share'); ?>
    </article>


<?php else : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('postbox-item '); ?>>
    <?php if(has_post_thumbnail()) : ?>
    <div class="postbox-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
            <span><?php the_time('d'); ?><br><?php the_time('M'); ?></span>
        </a>
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
<?php endif; ?>


