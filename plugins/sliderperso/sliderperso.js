jQuery(document).ready(function($) {
    // Gestion de l'upload d'image
    var file_frame;
    var carouselTypeSelect = document.getElementById('carousel_type');
    $('#upload_image_button').on('click', function(event) {
        event.preventDefault();

        if (file_frame) {
            file_frame.open();
            return;
        }

        file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select an Image to Upload',
            button: {
                text: 'Use this Image',
            },
            multiple: false
        });

        file_frame.on('select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $('#image-preview').attr('src', attachment.url).css('width', 'auto');
            $('#image_attachment_id').val(attachment.id);
        });

        file_frame.open();
    });

    // Confirmation de suppression
    $('.delete-image').on('click', function(event) {
        if (!confirm('Are you sure you want to delete this image?')) {
            event.preventDefault();
        }
    });

    // Récupération de la valeur sélectionnée dans la liste déroulante et application des styles CSS correspondants
    var carouselTypeSelect = document.getElementById('carousel_type');

    carouselTypeSelect.addEventListener('change', function() {
        var selectedType = carouselTypeSelect.options[carouselTypeSelect.selectedIndex].value;

        // Appliquer les règles CSS selon le type de carrousel sélectionné
        if (selectedType === 'default') {
            // Appliquer les règles CSS pour le type de carrousel par défaut
            displayCarouselDefault();
        } else if (selectedType === 'type1') {
            // Appliquer les règles CSS pour le type 1 de carrousel
        } else if (selectedType === 'type2') {
            // Appliquer les règles CSS pour le type 2 de carrousel
        }
        // Ajoutez d'autres conditions pour chaque type de carrousel
    });

    function displayCarouselDefault() {
        var selectedImagesContainer = $('.selected-images-container');
        var selectedImagesURLs = selectedImagesContainer.data('image-urls');
        var currentIndex = 0;
    
        function showCurrentImage() {
            $('#carousel-preview-image').attr('src', selectedImagesURLs[currentIndex]);
        }
    
        showCurrentImage();
    
        $('#next-image-button').on('click', function() {
            currentIndex = (currentIndex + 1) % selectedImagesURLs.length;
            showCurrentImage();
        });
    
        $('#prev-image-button').on('click', function() {
            currentIndex = (currentIndex - 1 + selectedImagesURLs.length) % selectedImagesURLs.length;
            showCurrentImage();
        });
    }

    displayCarouselDefault();


});
