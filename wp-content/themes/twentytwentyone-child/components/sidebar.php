<?php
$argsRecent = array('category' => get_option('data_config')['ANIMAL_CATEGORY_ID'], 'post_type' =>  'post', 'numberposts' => get_option('data_config')['RECENT_POST_NUMBER']);
$recentPosts = get_posts($argsRecent);
$social = get_query_var('social');
?>
<?php if ($social != '') { ?>
    <div class="share box-shadow-nor">
        <h3 class="share__title fw-700">Share</h3>
        <div class="share__social">
            <a class="social-link" href="#"><span class="facebook"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/facebook-color.png' ?>" alt=""></span></a>
            <a class="social-link" href="#"><span class="twitter"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/twitter-color.png' ?>" alt=""></span></a>
            <a class="social-link" href="#"><span class="youtube"><img class="social__image" src="<?= get_template_child_directory() . '/assets/images/p-color.png' ?>" alt=""></span></a>
        </div>
    </div>
<?php } ?>
<div class="recent">
    <h3 class="recent-title fs-16 fw-700 lh-22">RECENT POST</h3>
    <?php foreach ($recentPosts as $item) { ?>
        <div class="recent-item">
            <div class="recent-item__content">
                <a class="link-image-to-detail" href="<?= get_the_permalink($item) ?>">
                    <img class="recent-item__image" src="<?= get_template_child_directory() . '/assets/images/image-recent-2.png' ?>" alt="">
                </a>
                <a class="link-to-detail" href="<?= get_the_permalink($item) ?>">
                    <h4 class="recent-item__title fs-12 fw-700 lh-18"><?= $item->post_title ?></h4>
                </a>
            </div>
        </div>
    <?php } ?>
</div>