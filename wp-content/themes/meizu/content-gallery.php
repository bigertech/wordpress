<ul class="article">
<li>
<?php twentyeleven_posted_on(); ?><span class="comment"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentyeleven' ) . '</span>', __( '1', 'twentyeleven' ), __( '%', 'twentyeleven' ) ); ?></span><div class="clear"></div></li>
<li class="article_title">
	<?
		echo get_avatar(get_the_email(), 50);
	?>
	<h2 class="title"><a target="_blank" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
</li>
<li class="article_content">
<?php if ( post_password_required() ) : ?>
	<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
<?php else : ?>
	<?php
		$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
		if ( $images ) :
			$total_images = count( $images );
			$image = array_shift( $images );
			$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
	?>
	<div class="article_image"><a target="_blank" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a></div>
	<div class="article_text"><?php the_excerpt(); ?></div>
	<?php endif; ?>
<?php endif; ?>
</li>
</ul>