	
		<!-- END CONTENT -->
		</div>
		
	<!-- END CONTAINER -->
	</div>
	
	<div id="instagram-footer">
		
		<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?>
		
	</div>
	
	<div id="footer">
		
		<div class="container">
			
			<p class="copyright left"><?php echo wp_kses_post(get_theme_mod('sp_footer_copyright_left')); ?></p>
			<p class="copyright right"><?php echo wp_kses_post(get_theme_mod('sp_footer_copyright_right')); ?></p>
			
		</div>
		
	</div>
	
	<?php wp_footer(); ?>
	
</body>

</html>