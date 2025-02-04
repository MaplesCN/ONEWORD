<section class="no-results not-found"><header class="page-header"> <h1 class="page-title"><?php _e('好像什么也没有…');?></h1></header><div class="page-content"> <?php if ( is_home() && current_user_can( 'publish_posts' ) ) :printf('<p>'.wp_kses(__('Ready to publish your first post? <a href="%s">Get started here</a>.','twentynineteen'),array('a' => array('href' => array(),),)).'</p>',esc_url(admin_url('post-new.php')));elseif ( is_search() ) :?> <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentynineteen' ); ?></p> <?php get_search_form();else :?> <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentynineteen' ); ?></p> <?php endif;?> </div></section>