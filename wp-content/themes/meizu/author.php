<?php get_header(); ?>
<div id="main">
	<div id="content" class="contain">
		<div id="articlelist">
			<?php if ( have_posts() ) : ?>
				<?php
					/* Queue the first post, that way we know
					 * what author we're dealing with (if that is the case).
					 *
					 * We reset this later so we can run the loop
					 * properly with a call to rewind_posts().
					 */
					the_post();
				?>
				<div class="pagehead_author">
					
					<div class="photo_author"><?php echo get_avatar(get_the_email(), 97); ?></div>			
					<!--<li class="pagetheme_author"><?php printf( __( 'Author Archives: %s', 'twentyeleven' ), '<span class="name_author">' . get_the_author() . '</span>' ); ?></li>  -->
					<div id="author-description">
						<h2 style="font-size:24px;line-height:35px;color:#555555;"><?php printf( __( '%s', 'twentyeleven' ), get_the_author() ); ?></h2>
						<h3 style="font-size:14px;line-height:24px;color:#555555;"><?php the_author_meta( 'description' ); ?></h3>					
					
						<div class="author_div" >
						
						<?php 
							if(get_the_author_meta('sinat') != ''){
								echo "<a class='author_sina' target='_blank' href='";
								the_author_meta('sinat');
								echo "'></a>";
							}		
							if(get_the_author_meta('weixin') != ''){
								echo "<a class='author_weixin' href='";
								the_author_meta('weixin');
								echo "'></a>";
							}
							if(get_the_author_meta('zhihu') != ''){
								echo "<a class='author_zhihu' target='_blank' href='";
								the_author_meta('zhihu');
								echo "'></a>";
							}					  
						?>
						</div>
													  
					</div><!-- #author-description	-->
				</div>
				
				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
				?>
				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>
				<!--
				<div id="author-info">
					<div id="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?>
					</div><!-- #author-avatar -->
					<!-- #author-info -->
				<!-- </div> -->
				
				<?php endif; ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				<?php endwhile; ?>
				<?php twentyeleven_content_nav( 'nav-below' ); ?>
			<?php else : ?>
				<article id="post-0" class="post no-results not-found article">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
						<div class="cr" ></div>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			<?php endif; ?>
		</div><!-- end articlelist -->
	</div><!-- end content -->
</div><!-- end main -->