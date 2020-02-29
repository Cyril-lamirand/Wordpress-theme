<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content">
		
			<div id="main" <?php if(get_theme_mod('sp_sidebar_post') == true) : ?>class="fullwidth"<?php endif; ?>>
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php get_template_part('content'); ?>
						
				<?php endwhile; ?>
				
				<?php endif; ?>
				
			</div>

<?php if(get_theme_mod('sp_sidebar_post')) : else : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>