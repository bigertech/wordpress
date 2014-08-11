<?php get_header(); ?>
<div id="main">
	<div id="content" class="contain">
		<div class="errorpage">
        	<img src="<?php bloginfo( 'template_url' ); ?>/static/image/404icon.jpg" />
            <p class="returnhome_error"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">返回首页</a></p>
        </div>
	</div><!-- end content -->
</div><!-- end main -->
<?php get_footer(); ?>