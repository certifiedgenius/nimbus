<!-- <div class="row d-flex justify-content-center align-items-center rows bg-light mt-5">

            <div class="col-md-6">


                <div class="card">


                    <div class="text-center">

                        <img src="https://i.imgur.com/Dh7U4bp.png" width="200">
                        <span class="d-block mt-3">Subscribe to our newsletter in order not to miss new arrivals <br> promotions and discounts of our store</span>

                        <div class="mx-5">


                           <div class="input-group mb-3 mt-4">
                              <input  type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
                              <button class="btn btn-success border-rad" type="button" id="button-addon2">Subscribe</button>
                            </div>
                            

                        </div>
                        
                    </div>
                    
                </div>
                
            </div>



            
        </div> -->

 <form id="newsletter_form" method="post" action="<?php echo admin_url( 'admin-ajax.php' ); ?>"> <!--  -->
  
        <input type="email" name="email" />
        <input type="hidden" name="action" value="handle_newsletter"/>

        <!-- eller med WordPress inbyggda metod-->
		 <?php wp_nonce_field( 'wcm_newsletter_nonce', 'nonce' ); ?> <!-- namnet på nonce field. nocne är name på input field -->


        <button id="submit_trans" name="submit_form">Submit</button>
    </form>
        