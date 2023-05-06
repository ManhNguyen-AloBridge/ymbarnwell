<?php /* Template Name: Detail */ ?>

<?php
get_header();
set_query_var('social', true);
?>

<div class="detail-page">
    <div class="container-lg">
        <div class="detail__main">
            <div class="detail__content box-shadow-bold">
                <h1 class="detail__title fs-22 fw-700 lh-28"><?= the_title() ?></h1>
                <div class="detail__info">
                    <div class="time"><i class="fa-solid fa-clock"></i><span class="create_time"><?= $post->post_date ?></span></div>
                    <div class="author"><i class="fa-solid fa-user"></i><span class="author-name"><?php the_author_meta('display_name', $post->post_author) ?></span></div>
                </div>
                <div class="detail__description">
                    <?= the_content() ?>
                </div>
            </div>
            <div class="side-bar">
                <?= get_template_part('components/sidebar') ?>
            </div>

        </div>
    </div>
</div>


<?php
get_footer();
?>