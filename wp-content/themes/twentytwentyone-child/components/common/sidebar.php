<?php
$argsRecent = array('category' => get_option('data_config')['ANIMAL_CATEGORY_ID'], 'post_type' =>  'post', 'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']);
$recentPosts = get_posts($argsRecent);
$social = get_query_var('social');
?>

<?php if ($social != '' && is_active_sidebar('my-sidebar')) {
    dynamic_sidebar('my-sidebar');
} ?>

<div class="recent">
    <h3 class="recent-title fs-16 fw-700 lh-22">RECENT POST</h3>
    <?php
    if (count($recentPosts) == 0) {
    ?>
        <p class="text-dark">Sorry, but nothing post of this category!</p>
    <?php
    }
    ?>
    <?php foreach ($recentPosts as $item) { ?>
        <div class="recent-item">
            <div class="recent-item__content">
                <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                    <img class="recent-item__image" src="<?= get_image_thumbnail_post($item) ?>" alt="">
                </a>
                <a class="link-to-detail" href="<?= get_the_permalink($item) ?>">
                    <h4 class="recent-item__title fs-12 fw-700 lh-18"><?= $item->post_title ?></h4>
                </a>
            </div>
        </div>
    <?php } ?>
</div>