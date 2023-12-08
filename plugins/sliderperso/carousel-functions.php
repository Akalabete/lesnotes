<?php
function generate_carousel_shortcode_by_name($atts) {
    $atts = shortcode_atts(array(
        'name' => ''
    ), $atts);

    $saved_carousels = get_option('savedcarousel', array());
    $output = '';

    if (!empty($saved_carousels)) {
        foreach ($saved_carousels as $carousel_data) {
            if ($carousel_data['name'] === $atts['name']) {
                $output .= generate_carousel_shortcode_by_name($carousel_data);
                break; // Arrêter la boucle une fois que le carrousel correspondant est trouvé
            }
        }
    }

    return $output;
}

// Utilisation du shortcode avec l'attribut 'name'
add_shortcode('custom_carousel_by_name', 'custom_carousel_shortcode_by_name');

// Exemple d'utilisation du shortcode : [custom_carousel_by_name name="nom_du_carrousel"]

?>