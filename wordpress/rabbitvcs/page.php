<?php
/**
 * @package RabbitVCS
 * @subpackage Template
 */
 
get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			
			<div class="post" id="post-<?php the_ID(); ?>">
				<?php if (current_user_can('edit_posts')) : ?>
					<?php edit_post_link('[edit]', '<div class="edit">', '</div>'); ?>
				<?php endif; ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
				<div id="page-body">
					<div class="entry">
						<?php the_content('<span class="more">read more &raquo;</span>') ?>
					</div>
				</div>

				<?php if(is_single()) {?><p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?></p><?php } ?>
			</div>
			
			<div id="page-comments">
				<?php comments_template(); // Get wp-comments.php template ?>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

<?php get_footer(); ?>
