<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php _e('Les notes de mon moulin', 'lesnotes'); ?></title>
    <?php wp_head(); ?>
    <meta name=description content="Les notes de mon moulin est un recueil de propositions musicales autour de la musique cubaine et sud-américaine porté par un collectif de musiciens pour animer vos happenings, cocktails de mariage, inaugurations et soirées en Nouvelle Acquitaine.">
    <meta name=robots content="index, follow">
    <meta property=og:title content="Les notes de mon moulin">
    <meta property=og:description content="Les notes de mon moulin est un recueil de propositions musicales autour de la musique cubaine et sud-américaine porté par un collectif de musiciens pour animer vos happenings, cocktails de mariage, inaugurations et soirées en Nouvelle Acquitaine.">
    <meta property=og:url content=https://les-notes-de-mon-moulin.fr/>
    <meta property=og:type content=website>
    <meta property=og:site_name content="Les notes de mon moulin">
    <meta http-equiv=Permissions-Policy content="interest-cohort=()">
    <link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <script type=application/ld+json>
        [
          {
            "@context": "https://schema.org",
            "@type": "ImageGallery",
            "name": "Slider d'images du groupe alma del sur",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/sliders/slideralma/small/slideralma1smal.webp",
              "width": "240",
              "height": "150",
              "description": "Percussioniste d'Alma del sur jouant des congas"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
          },
          {
            "@context": "https://schema.org",
            "@type": "ImageGallery",
            "name": "Slider d'images du groupe La Isabellica",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/sliders/slideralma/small/slideralma1smal.webp",
              "width": "240",
              "height": "150",
              "description": "Percussioniste d'Alma del sur jouant des congas"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
          },
          {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Les notes de mon moulin",
          "url": "https://les-notes-de-mon-moulin.fr/",
          "priceRange": "on demand",
          "telephone": "+33-6-60-58-72-44",
          "paymentAccepted": [
            "Cash",
            "CreditCard"
            ],
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+33-6-60-58-72-44",
            "email": "goalupe@hotmail.fr",
            "contactType": "customer service"
            }
          }
        ]
      
      </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
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
      <img width="137" height="113" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoremov.webp" alt="<?php _e('Les notes de mon moulin', 'lesnotes'); ?>" />
    </a>
    <div class="nav-container">
      <ul class="nav-ul">
        <li class="nav-item navone"><a href="/" class="nav-link link-secondary"><?php _e('Accueil', 'lesnotes'); ?></a></li>
        <li class="nav-item navtwo"><a href="#presentation" ><?php _e('Las&nbsp;bandas', 'lesnotes'); ?></a></li>
        <li class="nav-item navthree"><a href="#prestations">Prestations</a></li>
        <li class="nav-item navfour "><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </header>
