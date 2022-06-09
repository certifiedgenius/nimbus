        <!-- Landing Page Newsletter section -->
        <section class="md:container md:mx-auto">
		    <div class="container relative items-center w-full py-12 mx-auto mb-40 md:px-12 lg:px-24 max-w-full">

			<h1 class="flex justify-center items-center py-2 text-5xl font-bold mb-1 mt-5">Nyhetsbrev</h1>
				<p class="flex justify-center items-center py-3 mb-1 mt-5">Få uppdateringar kring spännande äventyr.</p>



				<!-- Container holding both of the forms -->
				<div class="container relative w-full py-12 mx-auto md:px-12 lg:px-24 grid place-items-center mt-11">


					<!-- Checkboxes -->
					<div id="container">
						<form action="<?php echo admin_url('admin-ajax.php') ?>" method="POST" id="newsletter_form" class="flex justify-start gap-6 mb-6">

							<input type="checkbox" name="Sportresor" value="Sportresor">
							<label for="Sportresor">Sportresor</label><br>

							<input type="checkbox" name="Träningsläger" value="Träningsläger">
							<label for="Träningsläger">Träningsläger</label><br>

							<input type="checkbox" name="Cuper" value="Cuper">
							<label for="Cuper">Cuper</label><br><br>

					</div>



					<!-- E-mail input -->
					<div>
							<input
							type="email"
							name="email"
							class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white"
							placeholder="Your E-mail"/>

							<input type="hidden" name="action" value="handle_newsletter">

							<?php wp_nonce_field( 'wcm_newsletter_nonce', 'nonce' ); ?>

							<button
							type="submit"
							value="Subscribe"
							name="submit_form"
							id="submit_trans"
							class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-yellow-500 border-t border-b border-r hover:bg-yellow-600 transition duration-200"">Subscribe</button>

						</form>
					</div>


				</div>
			</div>
    </section>