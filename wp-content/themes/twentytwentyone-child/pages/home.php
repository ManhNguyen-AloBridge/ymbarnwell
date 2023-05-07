<?php /* Template Name: Home */ ?>

<?php
get_header();
$argsRecent = array(
    'post_type' =>  'post',
    'orderby' => 'date',
    'order'          => 'DESC',
    'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']
);
$recentPosts = get_posts($argsRecent);

$argsAnimal =
    array(
        'category' => get_option('data_config')['ANIMAL_CATEGORY_ID'],
        'post_type' =>  'post',
        'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']
    );
$animalPosts = get_posts($argsAnimal);

$argsEntertainment =
    array(
        'category' => get_option('data_config')['ENTERTAINMENT_CATEGORY_ID'],
        'post_type' =>  'post',
        'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']
    );
$entertainmentPosts = get_posts($argsEntertainment);

$argsFunny =
    array(
        'category' => get_option('data_config')['FUNNY_CATEGORY_ID'],
        'post_type' =>  'post',
        'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']
    );
$funnyPosts = get_posts($argsFunny);


?>

<div class="home-page">
    <div class="container-lg">
        <div class="recent-post">
            <h1 class="recent-post__title fw-700 fs-16 lh-22 title">RECENT POST</h1>
            <div class="recent-post__content">
                <div class="left-content">
                    <?php foreach ($recentPosts as $index => $item) {
                        if ($index == 0) {
                    ?>
                            <div class="left-content__item">
                                <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                    <img class="left-content__img fs-22 lh-28" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                                </a>
                                <a class="link-to-detail text-white" href="<?= get_the_permalink($item) ?>">
                                    <h3 class="left-content__title fw-700 fs-22 lh-28"><?= $item->post_title ?></h3>
                                </a>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
                <div class="right-content">
                    <?php foreach ($recentPosts as $index => $item) {
                        if ($index != 0 && $index < 5) {
                    ?>
                            <div class="right-content__item">
                                <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                    <img class="right-content__img" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                                </a>
                                <a class="link-to-detail text-white" href="<?= get_the_permalink($item) ?>">
                                    <h3 class="right-content__title fw-700 fs-16 lh-22"><?= $item->post_title ?></h3>
                                </a>
                            </div>

                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>

        <div class="animal">
            <h2 id="animal-title" class="animal__title fw-700 fs-16 title">ANIMAL</h2>
            <div class="left-content">
                <?php foreach ($animalPosts as $index => $item) {
                    if ($index == 0) {
                ?>
                        <div class="left-content__item">
                            <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                <img class="left-content__img" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                            </a>
                            <a class="link-to-detail text-white" href="<?= get_the_permalink($item) ?>">
                                <h3 class="left-content__title fw-700 fs-20 lh-28"><?= $item->post_title ?></h3>
                            </a>
                        </div>
                <?php
                    }
                } ?>
            </div>
            <div class="right-content">
                <?php foreach ($animalPosts as $index => $item) {
                    if ($index != 0 && $index < 3) {
                ?>
                        <div class="right-content__item">
                            <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                <img class="right-content__img" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                            </a>
                            <a class="link-to-detail text-white" href="<?= get_the_permalink($item) ?>">
                                <h3 class="right-content__title fw-700 fs-16 lh-22"><?= $item->post_title ?></h3>
                            </a>
                        </div>
                <?php
                    }
                } ?>
            </div>
        </div>

        <div class="entertainment-funny">
            <div class="entertainment">
                <h3 class="entertainment__title fw-700 fs-16 lh-22 title">ENTERTAINMENT</h3>
                <?php foreach ($entertainmentPosts as $index => $item) {
                    if ($index < 4) {
                ?>
                        <div class="entertainment__item">
                            <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                <img class="entertainment__img" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                            </a>
                            <div class="entertainment__content">
                                <?php if (wp_get_post_tags($item->ID)[0]->name) { ?>
                                    <p class="tag fs-11 lh-15"><?= "#" . wp_get_post_tags($item->ID)[0]->name ?></p>
                                <?php } ?>
                                <a class="link-to-detail" href="<?= get_the_permalink($item) ?>">
                                    <h4 class="title fs-13 lh-15 fw-700"><?= $item->post_title ?></h4>
                                </a>
                                <p class="description fs-11 lh-15">
                                    <?= $item->post_excerpt ?>
                                </p>
                            </div>
                        </div>
                <?php
                    }
                } ?>
            </div>
            <div class="funny">
                <h3 class="funny__title fw-700 fs-16 lh-22 title">FUNNY</h3>
                <div class="funny__scroll">
                    <?php foreach ($funnyPosts as $index => $item) {
                        if ($index < 4) {
                    ?>
                            <div class="funny__item">
                                <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                                    <img class="funny__img" src="<?= get_image_thumbnail_post($item) ?>" alt="" srcset="">
                                </a>
                                <div class="funny__content">
                                    <?php if (wp_get_post_tags($item->ID)[0]->name) { ?>
                                        <p class="tag fs-11 lh-15"><?= "#" . wp_get_post_tags($item->ID)[0]->name ?></p>
                                    <?php } ?>
                                    <a class="link-to-detail" href="<?= get_the_permalink($item) ?>">
                                        <h4 class="title fs-13 lh-15 fw-700"><?= $item->post_title ?></h4>
                                    </a>
                                    <p class="description fs-11 lh-15">
                                        <?= $item->post_excerpt ?>
                                    </p>
                                </div>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>