<div class="wrap">

    <h1> <?php echo esc_html( get_admin_page_title() ); ?> </h1>

    <form action="options.php" method="post">
        <?php

        // output security fields for the registered setting "wcm_menu"
        settings_fields('newsletter_menu');
        // output setting sections and their fields
        // (sections are registered for "wcm_menu", each field is registered to a specific section)
        do_settings_sections('newsletter_menu');
        // output save settings button
        submit_button(__('Save Settings', 'textdomain'));
        ?>
    </form>


    <form method="post">

        <!-- Lägg till en $nonce för security. -->
        <?php $nonce = wp_create_nonce("newsletter_user_nonce"); ?>

        <button id="del_trans" name="delete_transients" data-nonce="<?php echo $nonce;?>">Delete Transients</button>
    </form>


    <form method="post">
        <button name="get_repos">Load GitHub Repos</button>
    </form>


    <?php
    if (!empty($repos)) {
        echo '<ul id="repo_list">';
        foreach ($repos as $repo) {
            echo '<li><a href="' . $repo['url'] . '" target="_blank">' . $repo['name'] . '</a></li>';
        }
        echo '</ul>';
    }
    ?>
</div>