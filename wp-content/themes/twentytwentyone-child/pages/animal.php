<?php /* Template Name: Animal */ ?>

<?php
get_header();

// $data = get_fields()['activity'];
?>

<div class="animal-page">
    <div class="container-lg">
        <div class="animal__head">
            <h1 class="animal__title fs-18 fw-700 lh-25">ANIMAL</h1>
            <p class="animal__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu. </p>
        </div>
        <div class="animal__main">
            <div class="animal__content">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="animal-content-item">
                        <img class="animal-content-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                        <div class="animal-content-item__info">
                            <h3 class="animal-content-item__title fs-16 fw-700 lh-22">New Data Links Pandemic’s Origins to Raccoon Dogs at Wuhan Market</h3>
                            <p class="animal-content-item__description fs-13 lh-18">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non.
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="animal__recent">
                <h3 class="animal__recent-title fs-16 fw-700 lh-22">RECENT POST</h3>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="animal-recent-item">
                        <div class="animal-recent-item__content">
                            <img class="animal-recent-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                            <h4 class="animal-recent-item__title fs-12 fw-700 lh-18">New Data Links Pandemic’s Origins to Raccoon Dogs at Wuhan Market</h4>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="paginate d-flex d-md-none">
                <button class="paginate__btn" id="prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="paginate__info fs-18 fw-700 lh-24">Page 2 of 100</div>
                <button class="paginate__btn" id="next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="paginate d-none d-md-flex">
            <button class="paginate__btn" id="prev"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="paginate__info fs-18 fw-700 lh-24">Page 2 of 100</div>
            <button class="paginate__btn" id="next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

    </div>
</div>


<?php
get_footer();
?>