<?php get_header(); ?>
<div id="main">
	<div id="content" class="contain contain_post">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
	</div><!-- end content -->
</div><!-- end main -->
<?php get_footer(); ?>