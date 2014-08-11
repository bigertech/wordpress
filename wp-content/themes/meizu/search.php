<?php get_header(); ?>
<div id="main">
	<div id="content" class="contain">
		<div id="articlelist">
			<div class="pagehead_search"><h5><span class="magnifier"></span><?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span class="pagetheme_search">' . get_search_query() . '</span>' ); ?></h5></div><?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php twentyeleven_content_nav( 'nav-below' ); ?>
		<?php else : ?>
		
		<?php endif; ?>
		</div><!-- end articlelist -->
	</div><!-- end content -->
</div><!-- end main -->
<?php  /*get_sidebar();*/  ?>
<?php get_footer(); ?>