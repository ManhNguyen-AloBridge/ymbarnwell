<?php /* Template Name: Animal */ ?>

<?php
get_header();


$args = array('category' => get_option('data_config')['ANIMAL_CATEGORY_ID'], 'post_type' =>  'post', 'numberposts' => -1);
$posts = get_posts($args);
$pageData = get_page(get_option('data_config')['ANIMAL_PAGE_ID']);



var_dump($custom_query);

// $data = get_fields()['activity'];
?>

<div class="animal-page">
    <div class="container-lg">
        <div class="animal__head">
            <h1 class="animal__title fs-18 fw-700 lh-25"><?= $pageData->post_title ?></h1>
            <p class="animal__description">
                <?= $pageData->post_content ?>
            </p>
        </div>
        <div class="animal__main">
            <div class="animal__content">
                <?php foreach ($posts as $post) { ?>
                    <div class="animal-content-item">
                        <!-- <img class="animal-content-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt=""> -->
                        <img class="animal-content-item__image" src="<?= get_image_thumbnail_post($post) ?>" alt="">
                        <div class="animal-content-item__info">
                            <h3 class="animal-content-item__title fs-16 fw-700 lh-22"><?= $post->post_title ?></h3>
                            <p class="animal-content-item__description fs-13 lh-18">
                                <?= $post->post_excerpt ?>
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
                            <img class="animal-recent-item__image" src="<?= get_image_thumbnail_post($posts[$i]) ?>" alt="">
                            <h4 class="animal-recent-item__title fs-12 fw-700 lh-18"><?= $posts[$i]->post_title ?></h4>
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