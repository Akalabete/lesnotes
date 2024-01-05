<?php get_header(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
<main class="main">
    <div class="background-image"></div>
    <section id="accueil">
        <h2> 
            <?php _e('La musique au fil de vos événements.', 'lesnotes'); ?>
        </h2>
        <div class="presentation-container"> 
            <div class="titlecontainer">
                <div class="youtubecontainer">
                    <iframe width="250" height="180" src="https://www.youtube.com/embed/videoseries?si=jvX0SY3SoTKLP_Gm&amp;list=PLxwhPt3Ve_-43A20j9CugVRuJ8hJG5vSr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <h1 >
                    <?php _e('Les notes de mon moulin est un recueil de propositions musicales autour de la musique cubaine et sud-américaine porté par un collectif de musiciens pour animer vos happenings, cocktails de mariage, inaugurations et soirées en Nouvelle Acquitaine.', 'lesnotes'); ?>
                </h1>
            </div>
        </div>
        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.png" alt="<?php _e('séparateur de paragraphe', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="presentation">
        <h2> 
        <?php _e('La musique au fil de vos événements est à votre tempo, latino-cubain.', 'lesnotes'); ?>
        </h2>
        <div class="groupcontainer">
            <div class="group">
                <div class="groupphoto"></div> 
                <p>
                    <?php
                    $texte = __('Alma del sur est un trio de musique sud-américaine qui est composé de congas, flûte traversière et guitare baroque, le tout lié par le chant et la poésie à travers des histoires légendaires.', 'lesnotes');
                    $texte = str_replace('Alma del sur', '<u>Alma del sur</u>', $texte);
                    echo $texte;
                    ?>
                </p>      
            </div>
            <div class="group">
                <div class="groupphoto"></div>
                <p>
                    <?php
                    $texte = __('La Isabelica est un trio de “son cubano“ composé de bongos, guitare et de l&apos;indispensable guitare tres(guitare cubaine) qui signe par sa sonorité le son cubain dans un répertoire de musique traditionnelle et populaire sélectionné pour vous. Vous retrouverez de grands classiques pour ambiancer vos événements.', 'lesnotes');
                    $texte = str_replace('La Isabelica', '<u>La Isabelica</u>', $texte);
                    echo $texte;
                    ?>
                </p> 
            </div>
            <div class="group">
                <div class="groupphoto"></div>
                <p>
                    <?php
                    $texte = __('La Molienda est une proposition muscale des deux formations réunies autour de la musique cubaine composée de bongos, congas, guitare, tres et flûte traversière, cet ensemble se veux plus pertinent en rythmique et en ambiance.', 'lesnotes');
                    $texte = str_replace('La Molienda', '<u>La Molienda</u>', $texte);
                    echo $texte;
                    ?>
                </p>
            </div>
        </div>
        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.png" alt="<?php _e('séparateur de paragraphe', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="prestations">
        <h2> 
            <?php _e('Livre d&apos;or de nos prestations musicales.', 'lesnotes'); ?>
        </h2>

        <div class="slider">
            <div class="photo"></div>
            <div class="photo"></div>
            <div class="photo"></div>
            <div class="photo"></div>
        </div>
        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.png" alt="<?php _e('séparateur de paragraphe', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="contact">
        <h2> 
            <?php _e('Contactez-moi pour une prestation personnalisée.', 'lesnotes'); ?>
        </h2>
        <?php 
        $phone_number = get_option('lesnotes_settings_field_phone_number');
        $email = get_option('lesnotes_settings_field_email');
        ?>
        <p><span>Christophe</span> au : <?php echo $phone_number; ?></p>
        <p><span>Courriel</span> : <?php echo $email; ?></p>
    </section>
    
</main>
<?php get_footer(); ?>