<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentyeleven_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php comment_form(); ?>
<div class="reviews_post_mz">

	<div  class="othersreview_post">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
	</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
	    

			<?php
			    echo '<label class="title_orpost">共 <span>'.number_format_i18n( get_comments_number() ).'</span> 条评论</label>';
			?>

		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use twentyeleven_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define twentyeleven_comment() and that will be used instead.
				 * See twentyeleven_comment() in twentyeleven/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'twentyeleven_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<input type='hidden' id='this_page' value=1>
		<div class="btnbar_orpost"><input class="more_orpost" onclick='get_comment("<?php echo $id;?>")' type="button" value="加载更多评论" /></div>

		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyeleven' ); ?></p>
	<?php endif; ?>

</div><!-- #comments -->
</div>
<script>

function get_comment(id){
    
	var page=document.getElementById('this_page').value*1;
	document.getElementById('this_page').value=page+1;

	var url='http://blog.meizu.com/get_comment_data.php';

	$.post(url,{'id':id,'page':page,r:Math.random(),is_ajax:1},function(data){
		if (data == '0'){
			$('.more_orpost').val('没有更多的评论');
		} else {
			var data=eval('('+data+')'); // data['name']、data['sec']、data['content']
			for(var i=0;i<data.length;i++){
					 var sss='<li class="reviewlist_post_mz" id="li-comment-22"><article id="comment-22" class="comment"><footer class="comment-meta"><div class="comment-author vcard"><span class="username_rlpost">'+data[i]['name']+'</span><span class="time_rlpost"> · '+data[i]['sec']+'</span></div></footer><div class="comment-mz"><p>'+data[i]['content']+'</p></div></article></li>';
					 $(".commentlist").append(sss);
			} 

		} 
	});

}

</script>