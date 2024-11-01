<?php 
get_header();

?>


<section id="postbox" class="postbox-single-area postbox-area tp-plr-rs pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="postbox-wrapper">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>    
                        <?php echo get_template_part('template/content', get_post_format()); ?>


                        <?php echo get_template_part('template/biography'); ?>


                        <?php if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; ?>

                    <?php endwhile; ?>
                <?php endif; ?>   

                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="sidebar-wrapper">
                    <?php echo get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
get_footer();