<?php add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');

function register_post_works()
{
    $labels = [
        "name" => "制作実績"
    ];

    $args = [
        "labels" => $labels,
        "public" => true,
        "description" => "",
        "menu_position" => 5,
        "has_archive" => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('custom_category')
    ];

    register_post_type('works', $args);
}

add_action('init', 'register_post_works');

function custom_taxonomy()
{
    $labels = array(
        'name' => 'カテゴリー',
        'singular_name' => 'カテゴリー',
        'menu_name' => 'カテゴリー',
        'all_items' => 'すべてのカテゴリー',
        'edit_item' => 'カテゴリーを編集',
        'view_item' => 'カテゴリーを表示',
        'update_item' => 'カテゴリーを更新',
        'add_new_item' => '新しいカテゴリーを追加',
        'new_item_name' => '新しいカテゴリー名',
        'search_items' => 'カテゴリーを検索',
    );

    $args = array(
        'hierarchical' => true, // カテゴリーのように階層を持つ場合はtrue
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );

    register_taxonomy('custom_category', 'works', $args); // 'custom_category'というタクソノミーを作成
}

add_action('init', 'custom_taxonomy');
