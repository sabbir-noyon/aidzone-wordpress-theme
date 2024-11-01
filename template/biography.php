<?php 
    // Get the post author ID
    $author_id = get_the_author_meta('ID');

    // Get the author's avatar
    $author_avatar =  80;

    // Get the author's name
    $author_name = get_the_author_meta('display_name');

    // Get the author's bio/description
    $author_bio = get_the_author_meta('description');

    $facebook_url = get_the_author_meta('facebook_url');
    $twitter_url = get_the_author_meta('twitter_url');
    $linkedin_url = get_the_author_meta('linedin_url');


?>


<div class="postbox__author d-sm-flex align-items-start white-bg mb-95">
    <div class="postbox__author-thumb">
        <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), $author_avatar, '', '', [ 'class' => 'media-object img-circle' ] );?> 
        </a>
    </div>
    <div class="postbox__author-content">
        <h3 class="postbox__author-title">
            <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>"><?php echo esc_html($author_name); ?></a>
        </h3>

        <p><?php echo esc_html($author_bio); ?></p>

        <div class="postbox__author-social d-flex align-items-center">
            <?php if(!empty($facebook_url)) : ?>
            <a target="_blank" href="<?php echo esc_url($facebook_url); ?>"><i class="fa-brands fa-facebook-f"></i></a>
            <?php endif; ?> 
            <?php if(!empty($twitter_url)) : ?>   
            <a target="_blank" href="<?php echo esc_url($twitter_url); ?>"><i class="fa-brands fa-twitter"></i></a>
            <?php endif; ?> 
            <?php if(!empty($linkedin_url)) : ?>   
            <a target="_blank" href="<?php echo esc_url($linkedin_url); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
            <?php endif; ?> 
        </div>
    </div>
</div>