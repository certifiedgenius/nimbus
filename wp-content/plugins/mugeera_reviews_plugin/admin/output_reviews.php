<div class="wrap">
    <h1>
        <?php echo esc_html(get_admin_page_title()); ?>
    </h1>

        <form action="options.php" method="post">
            <?php
            // output security fields for the registered setting "wpporg_options"
            settings_fields('reviews_menu');
            // output setting sections and their fields
            // (sections are registered for "wporg", each field is registered to a specific section)
            do_settings_sections('reviews_menu');
            // output save settings button
            submit_button(__('Save Settings', 'textdomain'));
            ?>
        </form>

        
        <?php echo "banana's in pyjamas"; ?>
</div>