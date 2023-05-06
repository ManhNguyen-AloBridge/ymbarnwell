<?php /* Template Name: About Us*/ ?>

<?php
get_header();

$pageData = get_page(get_option('data_config')['ABOUT_US_PAGE_ID']);
?>

<div class="about-us-page">
    <div class="container-lg">
        <div class="about-us__main">
            <h1 class="about-us__title fs-18 fw-700 lh-25"><?= $pageData->post_title ?></h1>
            <?= $pageData->post_content ?>
        </div>
    </div>
</div>


<?php
get_footer();
?>