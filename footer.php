<!-- ... MAIN CONTENT -->

</main>

<footer>
	<div class="footer-nav">
		<?php 

			$args = array(
				'theme_location' => 'footer'
			);

			wp_nav_menu($args);

		?>
	</div>
	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>