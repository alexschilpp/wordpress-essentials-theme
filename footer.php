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

	<div class="ref-row">
		<span class="ref">
		  Made by 
		  <a class="rolling" href="http://www.alexschilpp.com">
		    <span data-hover="alexschilpp.com">
		      alexschilpp.com
		    </span>
		  </a>
		</span>
	</div>

	
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>