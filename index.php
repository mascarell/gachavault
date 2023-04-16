<?php

get_header();

?>  

<!-- timeline -->
<div class="timeline">
	<div class="container mx-auto">
		<div
			class="flex flex-col md:grid grid-cols-9 mx-auto text-black"
		>
		<?php
			$query = new WP_Query( array(
				'post_type'      => 'post',
				'posts_per_page' => -1,
			) );
			if ( $query->have_posts() ) :
				$counter = 0;
				while ( $query->have_posts() ) : $query->the_post();
					$counter++;
					if ( $counter % 2 == 1 ) {
						get_template_part('template-parts/timeline-post');
					} else {
						get_template_part('template-parts/timeline-post-right');
					}
				endwhile; wp_reset_postdata();
			endif; 
		?>
		</div>
	</div>
</div>

<?php

get_footer();

?>