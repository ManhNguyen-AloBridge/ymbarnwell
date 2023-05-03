<?php
config();
function config()
{
    $dataConfig = [
        'ANIMAL_PAGE_ID' => 15,
        'ABOUT_US_PAGE_ID' => 25,
        'ENTERTAINMENT_PAGE_ID' => 13,
        'FUNNY_PAGE_ID' => 19,
        'DETAIL_PAGE_ID' => 22,
        'ANIMAL_CATEGORY_ID' => 4,
        'ENTERTAINMENT_CATEGORY_ID' => 6,
        'FUNNY_CATEGORY_ID' => 5,

    ];

    if (!get_option('data_config')) {
        add_option('data_config', $dataConfig);
    } else {
        update_option('data_config', $dataConfig);
    }
}
