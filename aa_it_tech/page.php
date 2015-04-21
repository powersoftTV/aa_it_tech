<?php get_header(); ?>
<div class="p_wrapper">
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
    	<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
    	<?php edit_post_link('Edit', '<p>', '</p>'); ?>
    <?php endwhile; ?>
     <?php else : ?>
     	<h2><?php _e('Not Found'); ?></h2>
<?php endif; ?>   
</div>
<?php 	get_sidebar();?>
<?php get_footer(); ?> 
