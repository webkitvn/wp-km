<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="entry-thumbnail">
        <?php kingsmen_thumbnail('large'); ?>
    </div>
    <div class="entry-header">
        <?php kingsmen_entry_header(); ?>
        <?php
            $attachment = get_children( array('post_parent' => $post->ID) );
            $attachment_number = count( $attachment );
            printf( __('This image post contains %1$s photos', 'kingsmen'), $attachment_number);
        ?>
    </div>
    <div class="entry-content">
        <?php kingsmen_entry_content(); ?>
        <?php ( is_single() ? kingsmen_entry_tag():''); ?>
    </div>
</article>