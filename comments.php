<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="postbox-comment-from">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <div class="postbox-comment mb-100 test">
                <h3 class="postbox-comment-title mb-55">
                    <?php
                    $comment_count = get_comments_number();
                    echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'aidzone');
                    ?>
                </h3>
                <ul class="postbox__comment mb-95">
                    <?php
                    wp_list_comments(array(
                        'style'       => 'ul',
                        'short_ping'  => true,
                        'callback' => 'custom_comment_list'
                    ));
                    ?>
                </ul>
            </div>


            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'aidzone'),
                'next_text' => esc_html__('Next', 'aidzone'),
            ));
        endif;
        
        if ( is_user_logged_in() ) {
            $cl = 'loginformuser';
        } else {
            $cl = '';
        }

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');

        $fields = array(
            'author' => ' <div class="tp-contact-input-form"><div class="row"><div class="col-xl-6 col-lg-6"><div  class="tp-contact-input p-relative"><input type="text" name="author" id="author" placeholder="' . esc_attr__('Name*', 'aidzone') . '" value="' . esc_attr($commenter['comment_author']) . '" ' . ($req ? 'required' : '') . '></div>
         </div>',
            'email' => '<div class="col-xl-6 col-lg-6">
            <div class="tp-contact-input p-relative">
               <input type="email" name="email" id="email" placeholder="' . esc_attr__('Email', 'aidzone') . '" value="' . esc_attr($commenter['comment_author_email']) . '" ' . ($req ? 'required' : '') . '>
            </div>
         </div>',
            'url' => '<div class="col-lg-12">
            <div class="tp-contact-input p-relative">
               <input type="text" name="url" id="url" placeholder="' . esc_attr__('Website', 'aidzone') . '" value="' . esc_attr($commenter['comment_author_url']) . '">
            </div>
         </div></div> </div>',
        );


        $defaults = [
            'fields'             => $fields,
            'comment_field' => '<div class="col-xxl-12 ' . $cl . '">
                    <div class="tp-contact-input p-relative">
                       <textarea id="comment" name="comment" placeholder="' . esc_attr__('Your Comment Here...', 'aidzone') . '" required></textarea>
                    </div>
                </div>
            ',
            'submit_button' => '<div class="col-xxl-12">
                                    <div class="tp-contact-action">
                                       <button type="submit" class="tp-theme-btn">' . esc_html__('Post Comment', 'aidzone') . '</button>
                                    </div>
                                </div>',

            'cookies' => '<div class="col-xxl-12">
                <div class="postbox__comment-agree d-flex align-items-start mb-25">' .
                '<input class="e-check-input" type="checkbox" id="e-agree" name="wp-comment-agree" value="1" checked>' .
                '<label class="e-check-label" for="e-agree">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'aidzone') . '</label></div>
            </div>'
        ];
        // Display the comment form
        comment_form($defaults);
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>


<?php
// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');
// comments for end 


// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'aidzone'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <li <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                <div class="postbox-comment-box d-sm-flex">
                    <div class="postbox-comment-avater mr-45">
                        <?php echo get_avatar($comment, 150); ?>
                    </div>
                    <div class="postbox-comment-text">
                        <h5 class="postbox-comment-name"><?php comment_author(); ?></h5>
                        <span class="post-meta"> <?php comment_date(); ?></span>

                        <?php if ($comment->comment_approved == '0') : ?>
                            <p><?php esc_html_e('Your comment is awaiting moderation.', 'aidzone'); ?></p>
                        <?php endif; ?>
                        <?php comment_text(); ?>
                        <div class="postbox-comment-reply">
                            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        </div>
                    </div>
                </div>    
        <?php
    }
}
