
<footer class="text-gray-600 body-font">

	<div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
		<div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">

			<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          			<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        		</svg>

				<span class="ml-3 text-xl">nimbus</span>
      		</a>

			  	<p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
		</div>

		<div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
			<div class="lg:w-1/4 md:w-1/2 w-full px-4">

				<h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>





	<!-- This is the main_menu from the nav, add in 2 more different menus to make the footer complete -->
		<?php wp_nav_menu([
			'theme_location' => 'footer',
			'container' => 'nav',
			'menu_class' => 'list-none mb-10',
		]); ?>



			</div>
	</div>
</footer>



<?php wp_footer(); ?>
</body>
</html>
