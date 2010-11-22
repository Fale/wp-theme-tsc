<?php get_header(); ?>
<?php get_sidebar('left'); ?>

		<div id="container">
			<div id="content" role="main">
			<?php
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>
