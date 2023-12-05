<?php
/**
 * Plugin Name: caroussel creator
 * Plugin URI: https://lacouralexandre.tech
 * Description: Allows setting up a carousel
 * Version: 0.0.1
 * Author: alexandre lacour
 * Author URI: https://lacouralexandre.tech
 */

// Fonction pour ajouter la page de configuration du slider dans le menu admin
add_action('admin_menu', 'register_media_selector_settings_page');

function register_media_selector_settings_page() {
    add_submenu_page('options-general.php', 'Slider Settings', 'Slider Settings', 'manage_options', 'slider-settings', 'slider_settings_page_callback');
}
// ajout du style sur la page d'administration du plugin

add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');
function load_custom_wp_admin_style() {
    wp_register_style('custom_wp_admin_css', plugins_url('adminstyle.css', __FILE__));
    wp_enqueue_style('custom_wp_admin_css');
}
// Fonction pour afficher la page de configuration du slider
function slider_settings_page_callback() {
    // Récupération des valeurs sauvegardées dans les options du slider
    $carousel_width = get_option('slider_carousel_width', 'Default Width');
    $carousel_height = get_option('slider_carousel_height', 'Default Height');
    $selected_carousel_type = get_option('slider_carousel_type', 'default');
    $selected_images = get_option('slider_selected_images', array());
    $number_of_photos = count($selected_images);

    // Traitement de la soumission du formulaire pour les images sélectionnées
    if (isset($_POST['submit_image_selector']) && isset($_POST['image_attachment_id'])) {
        $selected_images = get_option('slider_selected_images', array());
        $image_id = absint($_POST['image_attachment_id']);
        if (!in_array($image_id, $selected_images)) {
            $selected_images[] = $image_id;
        }
        update_option('slider_selected_images', $selected_images);
    }

    // Traitement de la soumission du formulaire pour les spécification du slider
    // quand on mets a jour les données sont sauvegardée et réutilisées.
    if (isset($_POST['carrousel-spec'])) {
        $selected_carousel_type = isset($_POST['carousel_type']) ? sanitize_text_field($_POST['carousel_type']) : '';
        $carousel_width = isset($_POST['carousel_width']) ? sanitize_text_field($_POST['carousel_width']) : '';
        $carousel_height = isset($_POST['carousel_height']) ? sanitize_text_field($_POST['carousel_height']) : '';
        update_option('slider_carousel_type', $selected_carousel_type);
        update_option('slider_carousel_width', $carousel_width);
        update_option('slider_carousel_height', $carousel_height);
    }
    // Traitement de la suppression d'une image sélectionnée
    if (isset($_GET['delete_image']) && isset($_GET['image_id'])) {
        $selected_images = get_option('slider_selected_images', array());
        $image_id = absint($_GET['image_id']);
        $selected_images = array_diff($selected_images, array($image_id));       
        update_option('slider_selected_images', $selected_images);
    }

    // Chargement du script JS pour gérer l'upload d'image
    wp_enqueue_media();
    wp_enqueue_script('custom-slider-scripts', plugins_url('sliderperso.js', __FILE__), array('jquery'), '1.0', true);

    // Affichage de la page de configuration du slider
    ?>
    <div class='wrap'>
        <h1>Slider Configuration</h1>
        <div class="forms">
            <h2>Dimension des images et style choisi:</h2>
            <form method='post'>
                <label for="carousel_width">largeur:</label>
                <input type="text" id="carousel_width" name="carousel_width" value="<?php echo esc_attr($carousel_width); ?>" placeholder="Enter width">
                
                <label for="carousel_height">hauteur:</label>
                <input type="text" id="carousel_height" name="carousel_height" value="<?php echo esc_attr($carousel_height); ?>" placeholder="Enter height">
                
                <label for="carousel_type">options de style:</label>
                <select id="carousel_type" name="carousel_type">
                    <option value="default" <?php selected($selected_carousel_type, 'default'); ?>>Default</option>
                    <option value="type1" <?php selected($selected_carousel_type, 'type1'); ?>>Type 1</option>
                    <option value="type2" <?php selected($selected_carousel_type, 'type2'); ?>>Type 2</option>
                </select>
                
                <input type="submit" name="carrousel-spec" value="Save Carrousel Settings" class="button-primary">
            </form>
        </div>
        <div class="forms">
            <h2>Upload des photos:</h2>
            <form method='post'>
                <div class='image-preview-wrapper'>
                    <input id="upload_image_button" type="button" class="button" value="<?php _e('Upload Image'); ?>" />
                    <input type='hidden' name='image_attachment_id' id='image_attachment_id' value=''>
                    <input type="submit" name="submit_image_selector" value="Save Selected Image" class="button-primary">
                </div>
            </form>
        </div>
        <div class="selected-images-container">
            <?php foreach ($selected_images as $image_id) : ?>
                <?php $image_url = wp_get_attachment_url($image_id); ?>
                <div class="selected-image-item">
                    <img src='<?php echo $image_url; ?>' height='100'>
                    <a href="?page=slider-settings&delete_image=true&image_id=<?php echo $image_id; ?>" class="delete-image">Delete</a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="gallery-info">
            <h2>Rappel des éléments enregistrés:</h2>
            <p>largeur: <?php echo esc_html(get_option('slider_carousel_width', 'Default Width')); ?></p>
            <p>hauteur: <?php echo esc_html(get_option('slider_carousel_height', 'Default Height')); ?></p>
            <p>option de style: <?php echo esc_html(get_option('slider_carousel_type', 'Default Type')); ?></p>
            <p>nombre de photos: <?php echo esc_html($number_of_photos); ?></p>
        </div>
        <div class="carousel-preview">
            
        </div>
    </div>
    <?php
}
?>
