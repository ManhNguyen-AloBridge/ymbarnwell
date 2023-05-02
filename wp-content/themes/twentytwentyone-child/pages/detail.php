<?php /* Template Name: Detail */ ?>

<?php
get_header();

// $data = get_fields()['activity'];
?>

<div class="detail-page">
    <div class="container-lg">
        <div class="detail__main">
            <div class="detail__content box-shadow-bold">
                <h1 class="detail__title fs-22 fw-700 lh-28">New Data Links Pandemic’s Origins to Raccoon Dogs at Wuhan Market</h1>
                <div class="detail__info">
                    <div class="time"><i class="fa-solid fa-clock"></i><span class="create_time">01/01/2023</span></div>
                    <div class="author"><i class="fa-solid fa-user"></i><span class="author-name">Kelvin</span></div>
                </div>
                <div class="detail__description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                    </p>
                    <img class="detail__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                    </p>
                    <img class="detail__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                    </p>
                    <img class="detail__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sollicitudin pretium metus a elementum. Proin laoreet, ipsum feugia varius dapibus, neque purus pellentesque nibh, sagittis erat arcu vitae arcu.
                    </p>
                </div>
            </div>
            <div class="side-bar">
                <div class="share box-shadow-nor">
                    <h3 class="share__title">Share</h3>
                    <div class="share__social">
                        <span class="facebook"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/facebook-color.png' ?>" alt=""></span>
                        <span class="twitter"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/twitter-color.png' ?>" alt=""></span>
                        <span class="youtube"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/p-color.png' ?>" alt=""></span>
                    </div>
                </div>
                <div class="recent">
                    <h3 class="recent-title fs-16 fw-700 lh-22">RECENT POST</h3>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="recent-item">
                            <div class="recent-item__content">
                                <img class="recent-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                                <h4 class="recent-item__title fs-12 fw-700 lh-18">detail Cat royalty-free images</h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</div>


<?php
get_footer();
?>