<!-- right -->
<div class="flex md:contents timeline-post">
	<div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
		<div class="h-full w-6 flex items-center justify-center">
			<div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
		</div>
		<div
			class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-white shadow"
		></div>
	</div>
	<div
		class="bg-white col-start-6 col-end-10 p-4 rounded-xl my-4 mr-auto shadow-md"
	>
		<p class="text-xm text-gray-500 italic"><?php echo get_the_date(); ?></p>
		<h3 class="font-semibold text-lg mb-1"><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<?php
		$developer = get_post_meta( get_the_ID(), 'developer', true );
		if ( $developer ) { ?> 
			<div class="text-xs inline-flex items-center leading-sm uppercase px-3 py-1 bg-green-200 text-green-700 rounded-full"><?php echo $developer; ?></div>
		<?php } ?>
		<?php
		$publisher = get_post_meta( get_the_ID(), 'publisher', true );
		if ( $publisher ) { ?> 
			<div class="text-xs inline-flex items-center leading-sm uppercase px-3 py-1 bg-yellow-200 text-yellow-700 rounded-full"><?php echo $publisher; ?></div>
		<?php } ?>
		<div class="text-xs inline-flex items-center leading-sm uppercase px-3 py-1 bg-pink-200 text-pink-700 rounded-full">2023</div>
	</div>
</div>