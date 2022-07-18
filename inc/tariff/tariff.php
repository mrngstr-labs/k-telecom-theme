<?php
/**
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package K-Telecom_Theme
 */

add_action( "init", "register_post_type_tariff" );
function register_post_type_tariff(){

    register_post_type("tariff", array(
        "label"  => null,
        "labels" => [
            "name"               => 'Тарифы',
            "singular_name"      => 'Тариф',
            "add_new"            => 'Добавить тариф',
            "add_new_item"       => 'Добавить тариф',
            "edit_item"          => 'редактировать тариф',
            "new_item"           => 'Новый тариф',
            "view_item"          => 'Открыть тариф',
            "search_items"       => 'Поиск',
            "not_found"          => 'Не найдено',
            "not_found_in_trash" => 'В корзине ничего нет',
            "menu_name"          => 'Тарифы',
        ],
        "description"            => 'Тарифы',
        "exclude_from_search"    => true,
        "public"                 => true,
        "capability_type"        => "page",
        "hierarchical"           => false,
        "show_in_menu"           => null,
        "show_in_rest"           => null,
        "rest_base"              => null,
        "menu_position"          => null,
        "menu_icon"              => "dashicons-money",
        "supports"               => [
            "title",
            "editor",
            "custom-fields",
            "thumbnail",
        ],
        "has_archive"         => false,
        "rewrite"             => true,
        "query_var"           => true,
    ) );
}