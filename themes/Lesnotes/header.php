<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php _e('Les notes de mon moulin', 'lesnotes'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="container">
  <header class="header">
    <a href="/" class="header-link">
      
      <span class="header-content">
        <?php 
          $introduction = get_option('lesnotes_settings_field_introduction');
          echo $introduction;
        ?>
      </span>
      <img width="137" height="113" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php _e('Les notes de mon moulin', 'lesnotes'); ?>" />
    </a>
    <ul class="nav-ul">
      <li class="nav-item navone"><a href="/" class="nav-link link-secondary"><?php _e('Accueil', 'lesnotes'); ?></a></li>
      <li class="nav-item navtwo"><a href="#presentation" ><?php _e('Las&nbsp;bandas', 'lesnotes'); ?></a></li>
      <li class="nav-item navthree"><a href="#prestations">Prestations</a></li>
      <li class="nav-item navfour "><a href="#contact">Contact</a></li>
    </ul>
  </header>
