<?php

    add_action('init','theme_init_posttypes');
    
    function theme_init_posttypes() {
        
        $cp_args = array( 'labels' => array(
            'name' => 'Custom Post',
            'singular_name' => 'Custom Post',
            'all_items' => 'Wszystkie Custom Post',
            'add_new' => 'Dodaj nową Custom Post',
            'add_new_item' => 'Dodaj nową Custom Post',
            'edit_item' => 'Edytuj Custom Post',
            'new_item' => 'Nowa restauracja',
            'view_item' => 'Zobacz Custom Post',
            'search_items' => 'Szukaj Custom Post',
            'not_found' => 'Nie znaleziono żadnych Custom Post', 
            'not_found_in_trash' => 'Nie znaleziono żadnych Custom Post w koszu', 
            'parent_item_colon' => ''
        ),
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true, 
        'capability_type' => 'post', 
        'hierarchical' => false, 
        'menu_position' => 5, 
        'supports' => array(
            'title','editor','author','thumbnail','excerpt','comments','custom-fields', 'post-formats' ),
            'has_archive' => true );
        
        register_post_type('custom_post', $cp_args);


    }
?>