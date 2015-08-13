<?php

get_header();

if (have_posts()):
	while(have_posts()) : the_post();  ?>
		
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
			</a>
		</h2>
		<p class="info">
			<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> </small>
		</p>
		<p>
			<?php the_content(); ?>
		</p>

<?php endwhile;
else:
	echo "<p>No content found</p>";
endif;

get_footer();

?>