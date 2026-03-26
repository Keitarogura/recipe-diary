<?php
// 
function register_custom_post_type(){
    // 1.カスタムタクソノミーの登録
    $taxonomy_args  = [
        'labels' => [
            'name' => 'レシピカテゴリー', // 管理画面に表示する名前（複数形）
            'singular_name' => 'レシピカテゴリー' //管理画面に表示する名前（単数形）
        ],
        'hierarchical' => true, // 階層構造にするかどうか
        'show_admin_column' => true, // 一覧画面に表示するかどうか
        'show_in_rest' => true, // ブロックエディタで選択可能か
    ];
    // register_taxonomy('カスタムタクソノミーの名称','カスタムタクソノミーを使用するオブジェクトタイプ','カスタムタクソノミーの設定')
    register_taxonomy( 'recipe_category', 'recipe', $taxonomy_args ); // カスタムタクソノミーの登録
    // 2.カスタム投稿タイプの登録
    $post_args = [
        'labels' => [
            'name' => 'レシピ', // 管理画面に表示する名前（複数形）
            'singular_name' => 'レシピ' //管理画面に表示する名前（単数形）
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-food',
        'supports' => [
            'title','editor','thumbnail'
        ],
        'taxonomies' => ['recipe_category'],
        'show_in_rest' => true,
    ];
    // register_post_type( 'カスタム投稿タイプ名', 'カスタム投稿タイプの設定' )
    register_post_type( 'recipe', $post_args );
}
// 
add_action('init','register_custom_post_type');