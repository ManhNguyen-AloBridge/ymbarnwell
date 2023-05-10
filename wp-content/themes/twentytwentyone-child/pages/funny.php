<?php /* Template Name: Funny */ ?>

<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Lấy số trang hiện tại
$args = array(
    'post_type'      => 'post', // Loại bài viết
    'post_status'    => 'publish', // Chỉ lấy bài viết đã xuất bản
    'orderby'        => 'date', // Sắp xếp theo thời gian đăng bài viết mới nhất trước
    'order'          => 'DESC',
    'cat' => get_option('data_config')['FUNNY_CATEGORY_ID'],
    'paged'          => $paged // Số trang hiện tại
);

set_query_var('pageId', get_option('data_config')['FUNNY_PAGE_ID']);
set_query_var('args', $args);
?>


<?= get_template_part('components/pages/list-content') ?>


<?php
get_footer();
?>