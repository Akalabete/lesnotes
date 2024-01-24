<?php get_header(); ?>

<main class="main">
    <div class="background-image"></div>    
    <section id="accueil">
        <p class="site-subtitle" tabindex="0"> 
            <?php _e('La musique au fil de vos événements.', 'lesnotes'); ?>
        </p>
        <div class="presentation-container"> 
            <div class="titlecontainer">
                <div class="groupphoto">
                <div class="video-container">
                    <iframe preload="auto" width="560" height="315" src="https://www.youtube.com/embed/zN-NW3ZML-4?si=EMZBd1yPo2C4REo2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                
                </div>
                <h1 >
                    <?php 
                        $texte = __('Les&nbsp;notes&nbsp;de&nbsp;mon&nbsp;moulin est un recueil de propositions musicales autour de la musique cubaine et sud-américaine porté par un collectif de musiciens pour animer vos happenings, cocktails de mariage, inaugurations et soirées en Nouvelle Acquitaine.', 'lesnotes');
                        $texte = str_replace('Les&nbsp;notes&nbsp;de&nbsp;mon&nbsp;moulin', '<u>Les&nbsp;notes&nbsp;de&nbsp;mon&nbsp;moulin</u>', $texte);
                        echo $texte;
                    ?>
                </h1>
            </div>
        </div>
        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.webp" alt="<?php _e('séparateur de paragraphe entre la presentation du collectif et les groupes', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="presentation">
        <h2> 
        <?php _e('La musique au fil de vos événements est à votre tempo, latino-cubain.', 'lesnotes'); ?>
        </h2 tabindex="0">
        <div class="groupcontainer">
            <div class="group">
                
                <div class="groupphoto">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aGKTsuwStjk?si=YgRE0LMxzIdsT185" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </div> 
                <div class="group-text-container">
                    <p tabindex="0">
                        <?php
                            $texte = __('Alma&nbsp;del&nbsp;sur est un trio de musique sud-américaine qui est composé de congas, flûte traversière et guitare baroque, le tout lié par le chant et la poésie à travers des histoires légendaires.', 'lesnotes');
                            $texte = str_replace('Alma&nbsp;del&nbsp;sur', '<u>Alma&nbsp;del&nbsp;sur</u>', $texte);
                            echo $texte;
                        ?>
                    </p>      
                </div>
            </div>
            <div class="group">
                <div class="groupphoto">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cyynmmn8NMI?si=DgEgBvohLa4roUMx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </div>
                <div class="group-text-container">
                    <p tabindex="0">
                        <?php
                            $texte = __('La&nbsp;Isabelica est un trio de “son cubano“ composé de bongos, guitare et de l&apos;indispensable guitare tres(guitare cubaine) qui signe par sa sonorité le son cubain dans un répertoire de musique traditionnelle et populaire sélectionné pour vous. Vous retrouverez de grands classiques pour ambiancer vos événements.', 'lesnotes');
                            $texte = str_replace('La&nbsp;Isabelica', '<u>La&nbsp;Isabelica</u>', $texte);
                            echo $texte;
                        ?>
                    </p> 
                </div>
            </div>
            <div class="group">
                <div class="groupphoto">
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/photoremplacementmolienda360x263.webp" sizes="(min-width: 768px) 400px, 100vw">
                        <img style="width: 100%; height: auto;" src="<?php echo get_template_directory_uri(); ?>/assets/images/photoremplacementmolienda240x175.webp" alt="<?php _e('photo d&apos;ambiance de rue lors d&apos;un concert', 'lesnotes'); ?>" />
                    </picture>

                </div>
                <div class="group-text-container">
                    <p tabindex="0">
                        <?php
                            $texte = __('La&nbsp;Molienda est une proposition musicale des deux formations réunies autour de la musique cubaine composée de bongos, congas, guitare, tres et flûte traversière, cet ensemble se veux plus pertinent en rythmique et en ambiance.', 'lesnotes');
                            $texte = str_replace('La&nbsp;Molienda', '<u>La&nbsp;Molienda</u>', $texte);
                            echo $texte;
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.webp" alt="<?php _e('séparateur de paragraphe entre les groupes et le livre d&apos;or', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="prestations">
        <h2 tabindex="0"> 
            <?php _e('Livre d&apos;or de nos prestations musicales.', 'lesnotes'); ?>
        </h2>
<script>
    
    function createSlider(containerId, buttonPrevId, buttonNextId, sliderJsonPath, itemClass) {
        document.addEventListener('DOMContentLoaded', function () {
            fetch(`<?php echo get_template_directory_uri(); ?>${sliderJsonPath}`)
                .then(response => response.json())
                .then(sliderData => {
                    const sliderContainer = document.getElementById(containerId);
                    let currentIndex = 0;
                    function showSliderItem(index) {
                        const sliderItem = document.createElement('div');
                        sliderItem.classList.add(itemClass);
                        const currentSlider = sliderData[index];
                        sliderItem.innerHTML = `
                            <div class="${itemClass}-photo-container">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/${currentSlider.urlmedium}" sizes="(min-width: 360px) 360px, 100vw">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sliders/${currentSlider.urlsmall}" alt="${currentSlider.alt}" class="${itemClass}-photo" width="230" height="152">
                                </picture>
                            </div>
                        `;

                        sliderContainer.innerHTML = '';
                        sliderContainer.appendChild(sliderItem);
                    }

                    function nextSlide() {
                        currentIndex = (currentIndex + 1) % sliderData.length;
                        showSliderItem(currentIndex);
                    }

                    function prevSlide() {
                        currentIndex = (currentIndex - 1 + sliderData.length) % sliderData.length;
                        showSliderItem(currentIndex);
                    }

                    showSliderItem(currentIndex);

                    document.getElementById(buttonNextId).addEventListener('click', nextSlide, { passive: true });
                    document.getElementById(buttonPrevId).addEventListener('click', prevSlide, { passive: true });

                })
                .catch(error => console.error('Error fetching slider data:', error));
        });
    }
</script>
<div class="sliders">
<!-- Slider isa -->
<div class="sliderisa">
    <h3 tabindex="0" class="slider-titles"><?php _e('La Isabellica', 'lesnotes'); ?></h3>
    <div class="sliderisa-buttons" id="sliderisa-buttons">
        <button class="prevButton" id="prevButton"> ⬅️ </button>
        <div id="sliderisa-container" class="sliderisa-container"></div>
        <button class="nextButton" id="nextButton">➡️</button>
    </div>
</div>
<script>
    createSlider('sliderisa-container', 'prevButton', 'nextButton', '/assets/images/sliders/sliderisa/sisa.json', 'sliderisa-item');
</script>
<!-- Slider alma -->
<div class="slideralma">
    <h3 tabindex="0" class="slider-titles"><?php _e('Alma del Sur', 'lesnotes'); ?></h3>
    <div class="slideralma-buttons" id="slideralma-buttons">
        <button class="prevButton" id="prevButtonAlma">⬅️</button>
        <div id="slideralma-container" class="slideralma-container"></div>
        <button class="nextButton" id="nextButtonAlma">➡️</button>
    </div>
</div>
</div>
<script>
    createSlider('slideralma-container', 'prevButtonAlma', 'nextButtonAlma', '/assets/images/sliders/slideralma/alma.json', 'slideralma-item');
</script>



        <div class="separator">
            <img width="250" height="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/partition.webp" alt="<?php _e('séparateur de paragraphe entre le livre d&apos;or et les infos de contact', 'lesnotes'); ?>" />
        </div>
    </section>
    
    <section id="contact">
        <h2 tabindex="0"> 
            <?php _e('Contactez-moi pour une prestation personnalisée.', 'lesnotes'); ?>
        </h2>
        <?php 
        $phone_number = get_option('lesnotes_settings_field_phone_number');
        $email = get_option('lesnotes_settings_field_email');
        ?>
        <p tabindex="0"><span>Christophe</span> au : <?php echo $phone_number; ?></p>
        <p tabindex="0"><span>Courriel</span> : <?php echo $email; ?></p>
        <p class="fb-link" tabindex="0"><a href="https://www.facebook.com/Goalupe/" target="_blank"><img height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.webp"alt="<?php _e('Lien vers le profil facebook de Goa lupe', 'lesnotes'); ?>" /> </a></p>
    </section>
    <section id="Apropos">
        <div class="bio">
                <h2 tabindex="0">
                    <?php _e('A propos de l&apos;auteur', 'lesnotes'); ?>
                </h2>
                <h3 tabindex="0">
                    <?php _e('Bien que originaire d&apos;Angoulême je me suis très tôt passionné pour la culture d&apos;Amérique latine à travers la littérature la poésie et la musique bien-sur.</br>
        Mes nombreux voyages à Cuba depuis  2003 m&apos;ont permis de tisser des liens importants avec les coutumes locales et d&apos;approfondir mes connaissances dans la culture musicale de ce pays mais également du continent Sud Américain</br> 
        C&apos;est riche de toutes ces expériences à travers des rencontres et des collaborations  que je vous propose ici  la quintessence de mon expérience.', 'lesnotes'); ?>
                </h3>
        </div>
    </section>
    
</main>
<?php get_footer(); ?>