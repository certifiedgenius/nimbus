<!-- Main content of the page goes under here-->
<section class="md:container md:mx-auto body-font">
		<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">



			<article class="py-12 px-4">

				<div class="max-w-3xl mx-auto">

					<span> <?php echo get_the_date('l jS F, Y'); ?> </span>
						<h1 class="text-4xl  mb-4 font-heading font-semibold">The Official Dunder Mifflin Scranton Diary</h1>
							<a href="#" class="hover:text-blue-600 font-semibold">Skriven av <?php the_author(); ?> </a>
				</div>


				<div class="max-w-3xl mx-auto">
					<p class="mb-4">
						<?php the_content();?>
					</p>

					<p class="mb-4">
						We’re dedicated to ensure the highest level of customer satisfaction based on long-term professional relationships. By creating the positive working environment we’re enabling our employees to significantly improve not only their productivity, but what’s more important – job satisfaction.
					</p>


					<ul class="mb-4 list-inside list-disc">
						<li>High durability</li>
						<li>Value-based price</li>
						<li>Perfect performance on copy machines</li>
						<li>Long lasting whiteness</li>
					</ul>


					<p class="mb-10">
						We deliver our services with passion and dedication unmatched by other so called “big players”. We create a friendly environment for our workers and that’s what makes their dedication soar to the maximum. You are getting not only the best possible product, but also our love for paper (completely free of charge).
					</p>


					<blockquote class="text-center mb-10">
						<p class="text-lg font-semibold mb-2">
							"I would say I kind of have an unfair advantage, because I watch reality dating shows like a hawk, and I learn. I absorb information from the strategies of the winners and the losers. Actually, I probably learn more from the losers."
						</p>

						<footer class="text-gray-400">Michael Scott</footer>
					</blockquote>


					<p>Because the real business is done on paper.</p>
				</div>

			</article>

	</div>
</section>

	<?php
		if( get_the_tags() ):
		foreach( get_the_tags() as $tag ):
	?>

			<a href="<?php echo get_tag_link( $tag->term_id) ;?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>

	<?php
		endforeach;
		endif;
	?>


	<?php
		$categories = get_the_category();
		foreach($categories as $category):
	?>

			<a href="<?php echo get_category_link($category->term_id);?>">
				<?php echo $category->name;?>
			</a>


	<?php endforeach;?>