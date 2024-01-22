

<?php 
        $phone_number = get_option('lesnotes_settings_field_phone_number');
        $email = get_option('lesnotes_settings_field_email');
      ?>

      <footer class="footer">
      <div class="footer-item">
            <p>by <a href="www.lacouralexandre.tech" id="webmaster">Dev'your synergy</a></p>
        </div>
        <div class="footer-item">
            <p>© <?php echo date('Y') . ' ' . __('Les notes de mon moulin', 'lesnotes'); ?></p>
            <p><?php echo $email.' / '.$phone_number; ?></p>
        </div>
        <div class="footer-item">
            <p><a href="/"><?php _e('Accueil', 'lesnotes'); ?></a></p> 
        </div>
      </footer>

    </div>
    <?php wp_footer(); ?>
  </body>
</html>