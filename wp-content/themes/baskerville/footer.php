

<div class="credits section bg-dark small-padding">

	<div class="credits-inner section-inner">

		<p class="credits-left fleft">
		
			&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		
		</p>
		
		<p class="credits-right fright">
			
			<span><?php printf( __( 'Designed by <a href="%s">Killari Byte</a>', 'Killari Byte'), 'http://killaribyte.com' ); ?> &mdash; </span><a class="tothetop" title="<?php _e('To the top', 'Killari Byte'); ?>" href="#"><?php _e('Up', 'Killari Byte' ); ?> &uarr;</a>
			
		</p>
		
		<div class="clear"></div>
	
	</div> <!-- /credits-inner -->
	
</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>