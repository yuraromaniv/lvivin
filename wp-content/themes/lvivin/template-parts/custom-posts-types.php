<?php

// register custom posts types
    function register_cpt_excursions() {
        $labels = array( 
            'name' => _x( 'Екскурсії', 'excursions' ),
            'singular_name' => _x( 'Екскурсія', 'excursions' ),
            'add_new' => _x( 'Додати екскурсії', 'excursions' ),
            'add_new_item' => _x( 'Додати нові екскурсії ', 'excursions' ),
            'edit_item' => _x( 'Редагувати екскурсії', 'excursions' ),
            'new_item' => _x( 'Нові екскурсії', 'excursions' ),
            'view_item' => _x( 'Переглянути', 'excursions' ),
            'search_items' => _x( 'Пошук', 'excursions' ),
            'not_found' => _x( 'Екскурсій не знайдено', 'excursions' ),
            'not_found_in_trash' => _x( 'Екскурсій в корзині не знайдено', 'excursions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'excursions' ),
            'all_items' => _x( 'Всі екскурсії', 'excursions' ),
            'name_admin_bar' => _x( 'Екскурсії', 'excursions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Екскурсії',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'excursion',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_excursion',
                'read_post' => 'read_excursion',
                'delete_post' => 'delete_excursion',
                'edit_posts' => 'edit_excursions',
                'edit_others_posts' => 'edit_other_excursions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_excursions',
                'read_private_posts' => 'read_private_excursions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'comments', 'revisions' ), // 'author', 
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'excursions', $args );
    }
    add_action( 'init', 'register_cpt_excursions' );



    function register_cpt_bus_excursions() {
        $labels = array(
            'name' => _x( 'Автобусні екскурсії', 'bus_excursions' ),
            'singular_name' => _x( 'Автобусна екскурсія', 'bus_excursions' ),
            'add_new' => _x( 'Додати автобусні екскурсії', 'bus_excursions' ),
            'add_new_item' => _x( 'Додати нові автобусні екскурсії ', 'bus_excursions' ),
            'edit_item' => _x( 'Редагувати автобусні екскурсії', 'bus_excursions' ),
            'new_item' => _x( 'Нові автобусні екскурсії', 'bus_excursions' ),
            'view_item' => _x( 'Переглянути', 'bus_excursions' ),
            'search_items' => _x( 'Пошук', 'bus_excursions' ),
            'not_found' => _x( 'Автобусних екскурсій не знайдено', 'bus_excursions' ),
            'not_found_in_trash' => _x( 'Автобусних екскурсій в корзині не знайдено', 'bus_excursions' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'bus_excursions' ),
            'all_items' => _x( 'Всі автобусні екскурсії', 'bus_excursions' ),
            'name_admin_bar' => _x( 'Автобусні екскурсії', 'bus_excursions'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Автобусні екскурсії',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'bus_excursion',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_bus_excursion',
                'read_post' => 'read_bus_excursion',
                'delete_post' => 'delete_bus_excursion',
                'edit_posts' => 'edit_bus_excursions',
                'edit_others_posts' => 'edit_other_bus_excursions',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_bus_excursions',
                'read_private_posts' => 'read_private_bus_excursions',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'comments', 'revisions' ), // 'author',
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'bus_excursions', $args );
    }
    add_action( 'init', 'register_cpt_bus_excursions' );



    function register_cpt_residences() {
        $labels = array( 
            'name' => _x( 'Проживання', 'residences' ),
            'singular_name' => _x( 'Проживання', 'residences' ),
            'add_new' => _x( 'Додати місце для проживання', 'residences' ),
            'add_new_item' => _x( 'Додати нове місце для проживання', 'residences' ),
            'edit_item' => _x( 'Редагувати місце для проживання', 'residences' ),
            'new_item' => _x( 'Нове місце для проживання', 'residences' ),
            'view_item' => _x( 'Переглянути', 'residences' ),
            'search_items' => _x( 'Пошук', 'residences' ),
            'not_found' => _x( 'Місце для проживання не знайдено', 'residences' ),
            'not_found_in_trash' => _x( 'Місць для проживання в корзині не знайдено', 'residences' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'residences' ),
            'all_items' => _x( 'Всі місця для проживання', 'residences' ),
            'name_admin_bar' => _x( 'Місця для проживання', 'residences'),    //назва в адмін барі (тулбарі)
        );
        $args = array( 
            'labels' => $labels,
            'description' => 'Проживання',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => false,
            'show_in_menu' => false,
            'show_in_nav_menus' => false,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'residence',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_residence',
                'read_post' => 'read_residence',
                'delete_post' => 'delete_residence',
                'edit_posts' => 'edit_residences',
                'edit_others_posts' => 'edit_other_residences',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_residences',
                'read_private_posts' => 'read_private_residences',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'residences', $args );
    }
    add_action( 'init', 'register_cpt_residences' );



    function register_cpt_places() {
        $labels = array( 
            'name' => _x( 'Заклади', 'places' ),
            'singular_name' => _x( 'Заклад', 'places' ),
            'add_new' => _x( 'Додати заклад', 'places' ),
            'add_new_item' => _x( 'Додати новий заклад', 'places' ),
            'edit_item' => _x( 'Редагувати заклад', 'places' ),
            'new_item' => _x( 'Новий заклад', 'places' ),
            'view_item' => _x( 'Переглянути', 'places' ),
            'search_items' => _x( 'Пошук', 'places' ),
            'not_found' => _x( 'Заклад не знайдено', 'places' ),
            'not_found_in_trash' => _x( 'Заклад в корзині не знайдено', 'places' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'places' ),
            'all_items' => _x( 'Всі заклади', 'places' ),
            'name_admin_bar' => _x( 'Куди сходити', 'places'),    //назва в адмін барі (тулбарі)
        );
        $args = array(
            'labels' => $labels,
            'description' => 'Куди сходити',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'place',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_place',
                'read_post' => 'read_place',
                'delete_post' => 'delete_place',
                'edit_posts' => 'edit_places',
                'edit_others_posts' => 'edit_other_places',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_places',
                'read_private_posts' => 'read_private_places',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'places', $args );
    }
    add_action( 'init', 'register_cpt_places' );



    function register_cpt_world_tours() {
        $labels = array( 
            'name' => _x( 'Тури по світу', 'world_tours' ),
            'singular_name' => _x( 'Тур по світу', 'world_tours' ),
            'add_new' => _x( 'Додати тур по світу', 'world_tours' ),
            'add_new_item' => _x( 'Додати новий тур по світу', 'world_tours' ),
            'edit_item' => _x( 'Редагувати тур по світу', 'world_tours' ),
            'new_item' => _x( 'Новий тур по світу', 'world_tours' ),
            'view_item' => _x( 'Переглянути', 'world_tours' ),
            'search_items' => _x( 'Пошук', 'world_tours' ),
            'not_found' => _x( 'Тур по світу не знайдено', 'world_tours' ),
            'not_found_in_trash' => _x( 'Тур по світу в корзині не знайдено', 'world_tours' ),
            'parent_item_colon' => _x( 'Батьківський елемент', 'world_tours' ),
            'all_items' => _x( 'Всі заклади', 'world_tours' ),
            'name_admin_bar' => _x( 'Тур по світу', 'world_tours'),    //назва в адмін барі (тулбарі)
        );
        $args = array(
            'labels' => $labels,
            'description' => 'Тури по світу',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'capability_type' => 'world_tour',    //автоматично створює потрібні повноваження
            'capabilities' => array(
                'edit_post' => 'edit_world_tour',
                'read_post' => 'read_world_tour',
                'delete_post' => 'delete_world_tour',
                'edit_posts' => 'edit_world_tours',
                'edit_others_posts' => 'edit_other_world_tours',  //дозволяє редагувати записи, які належать іншим авторам
                'publish_posts' => 'publish_world_tours',
                'read_private_posts' => 'read_private_world_tours',
            ),
            'map_meta_cap' => true,
            'hierarchical' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ), // 'author',
            //'taxonomies' => array( 'post_tag', 'category' ),
            'has_archive' => true,
            'rewrite' => true,
            'query_var' => true,
            'can_export' => true
            //'delete_with_user' => true    //видаляти записи цього типу, які належать користувачеві, який видаляється
        );
        register_post_type( 'world_tours', $args );
    }
    add_action( 'init', 'register_cpt_world_tours' );
    
// end register custom posts types

?>