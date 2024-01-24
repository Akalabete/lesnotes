

<?php 
        $phone_number = get_option('lesnotes_settings_field_phone_number');
        $email = get_option('lesnotes_settings_field_email');
      ?>

      <footer class="footer">
      <div class="footer-item">
            <p tabindex="0">by <a href="www.lacouralexandre.tech" id="webmaster">Dev'your synergy</a></p>
        </div>
        <div class="footer-item">
            <p tabindex="0">© <?php echo date('Y') . ' ' . __('Les notes de mon moulin', 'lesnotes'); ?></p>
            <p tabindex="0"><?php echo $email.' / '.$phone_number; ?></p>
            <p tabindex="0"><a href="https://www.facebook.com/Goalupe/" target="_blank"><img height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.webp"alt="<?php _e('Lien vers le profil facebook de Goa lupe', 'lesnotes'); ?>" /> </a></p>
        </div>
        <div class="footer-item">
            <p tabindex="0"><a href="/"><?php _e('Accueil', 'lesnotes'); ?></a></p> 
        </div>
      </footer>

    </div>
    <?php wp_footer(); ?>
  </body>
</html>