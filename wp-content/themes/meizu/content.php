<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">




			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
				<h1 class="title">
					<?php
						//echo get_avatar(get_the_email(), 30);
					?>
					<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					<div class="cr"></div>
				</h1>
			<?php endif; ?>
			<div class="cr"></div>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php twentyeleven_posted_on(); ?>
				<span class="comment">
					<?php comments_popup_link(  __( 'Reply', 'twentyeleven' ) , _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
				</span>
			</div><!-- .entry-meta -->
			<?php endif; ?>



			<div class="cr" ></div>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<!-- 强制显示第一张图片 -->
		    <?php
// 		    	if( catch_that_image(1) != false){
// 		    		echo "<a href='";
// 		    		the_permalink();
// 		    		echo "'><img width='100%' height='300px' style='margin-bottom:10px;' src=".catch_that_image(1)."></a>";
// 		    	}

// 		    ?>

		    <!-- 显示封面 -->
		    <?php if ( has_post_thumbnail()) : ?>
  			 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   			<?php the_post_thumbnail(); ?>
  			 </a>
 			<?php endif; ?>

			<!-- 显示摘要 -->
			<?php
				echo "<a href='";
				the_permalink();
				echo "'>";
				the_excerpt();
				echo "</a>";
			 ?>

			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>


	</div><!-- #post-<?php the_ID(); ?> -->
