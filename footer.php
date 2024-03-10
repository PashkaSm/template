</div>
<footer>
<div class="wrap">
	<a href="<?php echo site_url(); ?>/" id="logo">
		<img src="<?php echo theme(); ?>/img/logo.svg" alt="logo">
	</a>
	<?php
		$main_nav = array(
			'theme_location' => 'main_menu',
			'menu'           => 'Footer menu',
			'container'      => false,
			'menu_class'     => 'level_a'
		);
		wp_nav_menu( $main_nav );
	?>
	<div class="copyright">
		Copyright &copy; <?php echo date( "Y" ); ?> 
	</div>
	<div class="s-link">
		<?php get_template_part( 'components/social', 'icons' ); ?>
	</div>
	
</div>
</footer>
<a href="#" class="burger desctop_hide"><span class="burger-icon "></span></a>
<div class="mobile_menu_container desctop_hide cfx">
<nav class="mobile_nav">
	<?php
	$mobile_nav = array(
		'theme_location' => 'main_menu',
		'menu'           => '',
		'container'      => false,
		'menu_class'     => 'level_a'
	);
	wp_nav_menu( $mobile_nav );
	?>
</nav>
</div>
<?php wp_footer(); ?>
</body>
</html>