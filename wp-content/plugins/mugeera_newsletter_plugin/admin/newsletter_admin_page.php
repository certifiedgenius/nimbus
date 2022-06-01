<div class="container">

    <h1> <?php echo esc_html( get_admin_page_title() ); ?> </h1>

    <form action="options.php" method="post">
        <?php

        // output security fields for the registered setting "wcm_menu"
        settings_fields('newsletter_menu');
        // output setting sections and their fields
        // (sections are registered for "wcm_menu", each field is registered to a specific section)
        do_settings_sections('newsletter_menu');
        // output save settings button
        submit_button(__('Save Settings', 'mugeera_newsletter_plugin'));
        ?>
    </form>

    <?php
        $args = [
            'headers' => [
                'Authorization' => 'Token' . get_option('newsletter_api_key'),

            ],
            'body' => json_encode(['contact' => 'mugeera.mansoor@medieistitutet.se'])
        ];
        $url = 'https://api.getnewsletter.com/v3/lists/';


        $newContact = 'https://api.getnewsletter.com/v3/contacts/';
        $response = wp_remote_post($newContactUrl, $args);


        $newSubUrl = 'https://api.getnewsletter.com/v3/lists/um89hs6Y8l2aOC1rq/subscribers/';


        $response = wp_remote_post( $newSubUrl, $args );

        var_dump(json_decode(wp_remote_retrieve_body( $response )));
    ?>

    <form method="post">
        <!-- Lägg till en $nonce för security. -->
        <?php $nonce = wp_create_nonce("newsletter_user_nonce"); ?>

        <button id="del_trans" name="delete_transients" data-nonce="<?php echo $nonce;?>">Delete Transients</button>
    </form>

</div>