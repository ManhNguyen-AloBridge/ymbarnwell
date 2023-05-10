<?php
$args = get_query_var('args');
$pageId = get_query_var('pageId');

$query = new WP_Query($args);
$total_pages = $query->max_num_pages; // Tổng số trang
$current_page = max(1, get_query_var('paged'));
$big = 999999999; // need an unlikely integer
$pageData = get_page($pageId);

?>

<div class="page-list-template">
    <div class="container-lg">
        <div class="page__head">
            <h1 class="page__title fs-18 fw-700 lh-25"><?= $pageData->post_title ?></h1>
            <p class="page__description">
                <?= $pageData->post_content ?>
            </p>
        </div>
        <div class="page__main">
            <div class="page__content">
                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="page-content-item">
                            <a class="link-image-to-detail" href="<?= get_the_permalink($post->id) ?>">
                                <img class="page-content-item__image" src="<?= get_image_thumbnail_post($post) ?>" alt="">
                            </a>
                            <div class="page-content-item__info">
                                <a class="link-to-detail" href="<?= get_the_permalink($post->id) ?>">
                                    <h3 class="page-content-item__title fs-16 fw-700 lh-22"><?= $post->post_title ?></h3>
                                </a>
                                <p class="page-content-item__description fs-13 lh-18">
                                    <?= $post->post_excerpt ?>
                                </p>
                            </div>
                        </div>
                <?php
                    endwhile;
                } ?>
            </div>
            <div class="side-bar">
                <?= get_template_part('components/common/sidebar') ?>
            </div>

            <div class="paginate d-flex d-md-none">
                <button class="paginate__btn prev"><i class="fa-solid fa-chevron-left"></i></button>
                <div class="paginate__info fs-18 fw-700 lh-24"><?= "Page $current_page of $total_pages" ?></div>
                <button class="paginate__btn next"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="paginate d-none d-md-flex">
            <button class="paginate__btn prev"><i class="fa-solid fa-chevron-left"></i></button>
            <div class="paginate__info fs-18 fw-700 lh-24"><?= "Page $current_page of $total_pages" ?></div>
            <button class="paginate__btn next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

        <?php
        if ($total_pages > 1) {
            echo '<div class="d-none">';
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => 'page/%#%',
                'current'   => $current_page,
                'total'     => $total_pages,
                'prev_text' => '<button class="paginate__btn" id="paginate-prev"><i class="fa-solid fa-chevron-left"></i></button>',
                'next_text' => '<button class="paginate__btn" id="paginate-next"><i class="fa-solid fa-chevron-right"></i></button>',
                'mid_size' => 3,
                'type' => 'list'
            ));
            echo '</div>';
        }
        ?>

    </div>
</div>