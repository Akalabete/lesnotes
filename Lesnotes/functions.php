<?php


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
    

}
function set_samesite_cookie($content) {
  // Assurez-vous que le contenu est une chaîne de caractères
  if (is_string($content)) {
      // Vérifiez si 'SameSite=None; Secure' n'est pas déjà présent et si l'utilisateur est connecté
      if (strpos($content, 'SameSite=None; Secure') === false && is_user_logged_in()) {
          $content = str_replace('path=/;', 'path=/; SameSite=None; Secure;', $content);
      }
  }

  return $content;
}

// Ajoutez le filtre uniquement si l'utilisateur est connecté
if (is_user_logged_in()) {
  add_filter('wp_headers', 'set_samesite_cookie', 10, 1);
}

add_filter('wp_headers', 'set_samesite_cookie');
  function lesnotes_add_admin_pages() {
    add_menu_page(__('Paramètres du thème Les notes de mon moulin', 'lesnotes'), __('lesnotes', 'lesnotes'), 'manage_options', 'lesnotes-settings', 'lesnotes_theme_settings', 'dashicons-admin-settings', 60); 
  }

  function lesnotes_theme_settings() {
    echo '<h1>'.esc_html( get_admin_page_title() ).'</h1>';
    echo '<form action="options.php" method="post" name="lesnotes_settings">';
    echo '<div>';

    settings_fields('lesnotes_settings_fields');
    do_settings_sections('lesnotes_settings_section');
    submit_button();

    echo '</div>';
    echo '</form>';
  }

  function lesnotes_settings_register() {
    register_setting('lesnotes_settings_fields', 'lesnotes_settings_fields', 'lesnotes_settings_fields_validate');
    add_settings_section('lesnotes_settings_section', __('Paramètres', 'lesnotes'), 'lesnotes_settings_section_introduction', 'lesnotes_settings_section');
    add_settings_field('lesnotes_settings_field_introduction', __('Introduction', 'lesnotes'), 'lesnotes_settings_field_introduction_output', 'lesnotes_settings_section', 'lesnotes_settings_section');
    add_settings_field('lesnotes_settings_field_phone_number', __('Numéro de téléphone', 'lesnotes'), 'lesnotes_settings_field_phone_number_output', 'lesnotes_settings_section', 'lesnotes_settings_section');
    add_settings_field('lesnotes_settings_field_email', __('Email', 'lesnotes'), 'lesnotes_settings_field_email_output', 'lesnotes_settings_section', 'lesnotes_settings_section');
  }

  function lesnotes_settings_section_introduction() {
    echo __('Paramètrez les différentes options de votre thème lesnotes.', 'lesnotes');
  }

  function lesnotes_settings_fields_validate($inputs) {  
    if(isset($_POST) && !empty($_POST)):
      if(isset($_POST['lesnotes_settings_field_introduction']) && !empty($_POST['lesnotes_settings_field_introduction'])):
        update_option('lesnotes_settings_field_introduction', $_POST['lesnotes_settings_field_introduction']);
      endif;
      if(isset($_POST['lesnotes_settings_field_phone_number']) && !empty($_POST['lesnotes_settings_field_phone_number'])):
        update_option('lesnotes_settings_field_phone_number', $_POST['lesnotes_settings_field_phone_number']);
      endif;
      if(isset($_POST['lesnotes_settings_field_email']) && !empty($_POST['lesnotes_settings_field_email'])):
        update_option('lesnotes_settings_field_email', $_POST['lesnotes_settings_field_email']);
      endif;
    endif;

    return $inputs;
  }

  function lesnotes_settings_field_introduction_output() {
    $value = get_option('lesnotes_settings_field_introduction');

    echo '<input name="lesnotes_settings_field_introduction" type="text" value="'.$value.'" />';
  }

  function lesnotes_settings_field_phone_number_output() {
    $value = get_option('lesnotes_settings_field_phone_number');

    echo '<input name="lesnotes_settings_field_phone_number" type="text" value="'.$value.'" />';
  }

  function lesnotes_settings_field_email_output() {
    $value = get_option('lesnotes_settings_field_email');

    echo '<input name="lesnotes_settings_field_email" type="text" value="'.$value.'" />';
  }


  add_action('admin_menu', 'lesnotes_add_admin_pages', 10);
  add_action('admin_init', 'lesnotes_settings_register');

  // Créer un shortcode pour le carrousel


function carousel_shortcode() {
    $selected_images = array();
    ob_start();
    ?>
    <div class="carousel-preview" data-selected-images='<?php echo json_encode($selected_images); ?>'>
        <div class="caroussel-preview-container">
            <img src="" id="carousel-preview-image" alt="Selected Image" height="200">
            <button id="prev-image-button"><</button>
            <button id="next-image-button">></button>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('carousel', 'carousel_shortcode');
    