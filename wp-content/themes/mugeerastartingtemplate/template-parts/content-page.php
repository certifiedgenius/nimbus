<!-- Main content of the page goes under here-->
<section class="md:container md:mx-auto body-font">
		<div class="container relative items-center w-full py-6 mx-auto md:px-12 lg:px-24 max-w-full">



			<article <?php post_class('py-12 px-4'); ?> id="post-<?php the_ID(); ?>">

				<div class="max-w-3xl mx-auto">

					<span> <?php echo get_the_date('l jS F, Y'); ?> </span>
			<!-- Title --> <h1 class="text-4xl mb-4 mt-5 font-heading font-semibold"> <?php the_title(); ?> </h1>
			<!-- who the author is --> <a href="#" class="hover:text-blue-600 font-semibold">Skriven av <?php the_author(); ?> </a>
				</div>


				<div class="max-w-3xl mx-auto">
					<p class="mb-4">
						<?php the_content();?>
					</p>




					<blockquote class="text-center mb-10">
						<p class="text-lg font-semibold mb-2">

						</p>

						<footer class="text-gray-400"> <?php the_author(); ?> </footer>
					</blockquote>
				</div>

			</article>

	</div>
</section>