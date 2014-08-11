<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>


		<div id="articlelist">
			<div class="article article_post">

				<div class="article_title">
					<?php
						//echo get_avatar(get_the_email(), 30);
					?>
					<span class="title"><a href='#' title="<?php the_title();?>"><?php the_title(); ?></a></span>
				</div>
				<div>
					<?php twentyeleven_posted_on(); ?>
					<span class="comment"><a href="#"><?php echo number_format_i18n( get_comments_number() );?></a></span><div class="clear"></div>
				</div>
				<div class="article_content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
				</div>
                <!--
                <li class="sharebtn_post">
<a target="_blank" href="http://v.t.sina.com.cn/share/share.php?url=http://www.salmonch.com/?p=<?php echo $id;?>.html&title=<?php echo the_title();?>"></a>
                </li>
                 -->
			</div>
		</div> <!-- end articlelist -->
