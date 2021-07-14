<?php

define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID', 'simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID', 'simpleshop_customizer_panel');

if (class_exists('Kirki')) {
    Kirki::add_config( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    Kirki::add_panel( SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'Simple Shop Homepage Settings', 'simpleshop' ),
    ) );

    // Product Category Customizer Settings

    Kirki::add_section( 'simpleshop_homepage_category', array(
        'title'          => esc_html__( 'Category Settings', 'simpleshop' ),
        'panel'          => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        'priority'       => 160,
        'active_callback' => function() {
            return 'page-templates/homepage.php';
        }
    ) );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'switch',
        'settings'    => 'simpleshop_customizer_display_categories',
        'label'       => esc_html__( 'Display Categories Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage_category',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'simpleshop' ),
            'off' => esc_html__( 'Disable', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_category_title',
        'label'    => esc_html__( 'Category Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_category',
        'default'  => esc_html__( 'What\'s the category?', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_categories',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_categories_columns',
        'label'    => esc_html__( 'Product Columns', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_category',
        'default'  => '3',
        'priority' => 10,
        'active_callback' => [
            [
                'setting' => 'simpleshop_customizer_display_categories',
                'operator' => '==',
                'value' => true
            ]
        ]
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'switch',
        'settings' => 'simpleshop_customizer_display_categories_number',
        'label'    => esc_html__( 'Display Product Number Besides Category', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_category',
        'default' => '1',
        'priority' => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'simpleshop' ),
            'off' => esc_html__( 'Disable', 'simpleshop' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_categories',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

// Product Arrival Customizer Settings
    Kirki::add_section( 'simpleshop_homepage_new_arrival', array(
        'title'          => esc_html__( 'New Arrival Settings', 'simpleshop' ),
        'panel'          => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        'priority'       => 160,
        'active_callback' => function() {
            return 'page-templates/homepage.php';
        }
    ) );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'switch',
        'settings'    => 'simpleshop_customizer_display_products',
        'label'       => esc_html__( 'New Arrival Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage_new_arrival',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'simpleshop' ),
            'off' => esc_html__( 'Disable', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_display_products_title',
        'label'    => esc_html__( 'New Arrival Title', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_new_arrival',
        'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_products',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_display_products_sub_title',
        'label'    => esc_html__( 'New Arrival Subtitle', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_new_arrival',
        'default'  => esc_html__( 'There are 13 new products', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_products',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_display_products_col',
        'label'    => esc_html__( 'Product Column', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_new_arrival',
        'default'  => '1',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_products',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'switch',
        'settings'    => 'simpleshop_customizer_display_products_number',
        'label'       => esc_html__( 'Display Product Number', 'simpleshop' ),
        'section'     => 'simpleshop_homepage_new_arrival',
        'default'     => 'on',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'simpleshop' ),
            'off' => esc_html__( 'Disable', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'simpleshop_customizer_display_products_number_title',
        'label'    => esc_html__( 'Product Number', 'simpleshop' ),
        'section'  => 'simpleshop_homepage_new_arrival',
        'default'  => '1',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_customizer_display_products_number',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ] );
}
