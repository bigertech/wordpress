<?php get_header(); ?>
<div id="main">
	<div id="content" class="contain">
		<div id="articlelist" >
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?><?php get_template_part( 'content', get_post_format()); ?><?php endwhile; ?>
			<?php endif; ?>
			<?php twentyeleven_content_nav( 'nav-below' ); ?>
		</div><!-- end articlelist -->
	</div><!-- end content -->
</div><!-- end main -->
<?php  /*get_sidebar();*/  ?>
<?php get_footer(); ?>