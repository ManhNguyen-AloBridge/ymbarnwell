<?php /* Template Name: Home */ ?>

<?php
get_header();

// $data = get_fields()['activity'];
?>

<div class="home-page container-lg">
    <div class="container-lg">
        <div class="recent-post">
            <h1 class="recent-post__title fw-700 fs-16 lh-22 title">RECENT POST</h1>
            <div class="recent-post__content">
                <div class="left-content">
                    <div class="left-content__item">
                        <img class="left-content__img fs-22 lh-28" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="" srcset="">
                        <h3 class="left-content__title fw-700 fs-22 lh-28">A Beautiful Reindeer In The Forest</h3>
                    </div>
                </div>
                <div class="right-content">
                    <div class="right-content__item">
                        <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                        <h3 class="right-content__title fw-700 fs-16 lh-22">Hilarious Smile</h3>
                    </div>
                    <div class="right-content__item">
                        <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                        <h3 class="right-content__title fw-700 fs-16 lh-22">Hilarious Smile</h3>
                    </div>
                    <div class="right-content__item">
                        <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                        <h3 class="right-content__title fw-700 fs-16 lh-22">Hilarious Smile</h3>
                    </div>
                    <div class="right-content__item">
                        <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                        <h3 class="right-content__title fw-700 fs-16 lh-22">Hilarious Smile</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="animal">
            <h2 id="animal-title" class="animal__title fw-700 fs-16 title">ANIMAL</h2>
            <div class="left-content">
                <div class="left-content__item">
                    <img class="left-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="" srcset="">
                    <h3 class="left-content__title fw-700 fs-20 lh-28">A Beautiful Reindeer In The Forest</h3>
                </div>
            </div>
            <div class="right-content">
                <div class="right-content__item">
                    <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="" srcset="">
                    <h3 class="right-content__title fw-700 fs-16 lh-22">A Beautiful Reindeer In The Forest</h3>
                </div>
                <div class="right-content__item">
                    <img class="right-content__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="" srcset="">
                    <h3 class="right-content__title fw-700 fs-16 lh-22">A Beautiful Reindeer In The Forest</h3>
                </div>
            </div>
        </div>

        <div class="entertainment-funny">
            <div class="entertainment">
                <h3 class="entertainment__title fw-700 fs-16 lh-22 title">ENTERTAINMENT</h3>
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="entertainment__item">
                        <img class="entertainment__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                        <div class="entertainment__content">
                            <p class="tag fs-11 lh-15">#Entertainment</p>
                            <h4 class="title fs-13 lh-15 fw-700">Good films in the world</h4>
                            <p class="description fs-11 lh-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="funny">
                <h3 class="funny__title fw-700 fs-16 lh-22 title">FUNNY</h3>
                <div class="funny__scroll">
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <div class="funny__item">
                            <img class="funny__img" src="<?= get_template_child_directory() . '/assets/images/image-recent-1.png' ?>" alt="" srcset="">
                            <div class="funny__content">
                                <p class="tag fs-11 lh-15">#Entertainment</p>
                                <h4 class="title fs-13 lh-15 fw-700">Good films in the world</h4>
                                <p class="description fs-11 lh-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non.</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us">
        <h3 class="contact-us__title fw-700">YMBARNWELL</h3>
        <p class="contact-us__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet mattis nunc. Nullam ullamcorper dui arcu, quis fringilla lacus varius non.</p>
        <p class="contact-us__us fw-700">Contact us: admin@gmail.com</p>
    </div>
</div>


<?php
get_footer();
?>