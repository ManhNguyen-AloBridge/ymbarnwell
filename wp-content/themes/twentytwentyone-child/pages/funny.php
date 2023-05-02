<?php /* Template Name: Funny */ ?>

<?php
get_header();

// $data = get_fields()['activity'];
?>

<div class="funny-page">
    <div class="container-lg">
        <div class="funny__head">
            <h1 class="funny__title fs-18 fw-700 lh-25">FUNNY</h1>
            <p class="funny__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu. </p>
        </div>
        <div class="funny__main">
            <div class="funny__content">
                <?php for ($i = 0; $i < 7; $i++) { ?>
                    <div class="funny-content-item">
                        <img class="funny-content-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                        <div class="funny-content-item__info">
                            <h3 class="funny-content-item__title fs-16 fw-700 lh-22">Funny Cat royalty-free images</h3>
                            <p class="funny-content-item__description fs-13 lh-18">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non.
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="funny__recent">
                <h3 class="funny__recent-title fs-16 fw-700 lh-22">RECENT POST</h3>
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="funny-recent-item">
                        <div class="funny-recent-item__content">
                            <img class="funny-recent-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                            <h4 class="funny-recent-item__title fs-12 fw-700 lh-18">Funny Cat royalty-free images</h4>
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