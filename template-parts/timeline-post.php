<!-- <div class="post container">
	<div class="margin">
		<a class="thumbnail" href="<?php the_permalink(); ?>">
			<div class="img lozad" data-background-image="<?php echo the_post_thumbnail_url(); ?>"></div>
		</a>
		<div class="content">
			<p class="date"><?php echo get_the_date(); ?></p>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php echo the_excerpt(); ?>
		</div>
	</div>
</div> -->

<!-- left -->
<div class="flex flex-row-reverse md:contents timeline-post">
	<div
		class="bg-white col-start-1 col-end-5 p-4 rounded-xl my-4 ml-auto shadow-md"
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
	</div>
	<div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
		<div class="h-full w-6 flex items-center justify-center">
			<div class="h-full w-1 bg-gray-300 pointer-events-none"></div>
		</div>
		<div
			class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-white shadow"
		></div>
	</div>
</div>