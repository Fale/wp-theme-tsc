<?php get_header(); ?>

		<div id="container">
<?php get_sidebar('left'); ?>
			<div id="content">
  			<div id="center" role="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'default'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div class="entry">
					<?php the_content((__( '&raquo; Read more: ', 'default')) . the_title('', '', false)); ?>
				</div>        
			</div>

		<?php endwhile; ?>

		<div class="pagination navigation clearfix">
		  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
  		  <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'default')) ?></div>
  			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'default')) ?></div>
		  <?php } ?>
		</div>


	<?php else : ?>

    <?php include (TEMPLATEPATH . "/missing.php"); ?>

	<?php endif; ?>

  			</div><!-- #center -->
			</div><!-- #content -->
<?php get_sidebar('right'); ?>
		</div><!-- #container -->

<?php get_footer(); ?>
