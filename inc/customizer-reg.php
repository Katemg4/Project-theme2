<?php
/**
 * Registration for customizerUI
 *
 * contents
 * - customizer_registration
 *
 *
 * @link URL
 *
 * @package WordPress
 * @subpackage happyhealthylife
 * @since happyhealthylife v1.0
 */

/**
 * calls registration functions
 */
function hhl_customizer_registration_all($wp_customize)
{
    hhl_add_to_site_identity($wp_customize);
    hhl_add_content_display_section($wp_customize);
    hhl_add_social_icon_section($wp_customize);
    hhl_add_to_color($wp_customize);
}

/**
 * Site Identity section
 */
function hhl_add_to_site_identity($wp_customize)
{
    // register the setting
    $wp_customize->add_setting('copyright_text', [
        'transport' => 'refresh',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'validate_callback' => '',
        'sanitize_callback' => '',
    ]);

    // register the textbox control
    $wp_customize->add_control('copyright_text', [
        'label' => __('Copyright'),
        'description' => esc_html__('The copyright text'),
        'section' => 'title_tagline',
        'priority' => 10,
        'type' => 'text',
        'capability' => 'edit_theme_options',
        'input_attrs' => [
            'class' => 'my-custom-class',
            'placeholder' => __('Enter name...'),
        ],
    ]);
}

/**
 * New section Social icon options for footer
 */
function hhl_add_social_icon_section($wp_customize)
{
    // first create the section
    $wp_customize->add_section('social_icon_section', [
        'title' => __('Social Media Icons'),
        'description' => esc_html__(
            'Choose your social media icons for footer'
        ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ]);

    // social type 0=square, 1=no-square
    $wp_customize->add_setting('footer_social_icon_type', [
        'transport' => 'refresh',
        'default' => 0,
        'type' => 'theme_mod',
        'validate_callback' => '',
        'sanitize_callback' => '',
    ]);

    // $wp_customize->add_control(
    //     new Lt_Social_Icon_Select_Custom_Control(
    //         $wp_customize,
    //         'footer_social_icon_type',
    //         [
    //             'label' => esc_attr__('Social Icon Style'),
    //             'description' => esc_attr__(
    //                 'Selected style will apply to all four social icons'
    //             ),
    //             'settings' => 'footer_social_icon_type',
    //             'section' => 'social_icon_section',
    //         ]
    //     )
    // );

    // links for icons
    // fb
    $wp_customize->add_setting('footer_fb_link', [
        'transport' => 'refresh',
        'type' => 'theme_mod',
        'validate_callback' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_fb_link', [
        'label' => __('Facebook link'),
        'section' => 'social_icon_section',
        'type' => 'url',
    ]);

    // ig
    $wp_customize->add_setting('footer_ig_link', [
        'transport' => 'refresh',
        'type' => 'theme_mod',
        'validate_callback' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('footer_ig_link', [
        'label' => __('Instagram link'),
        'section' => 'social_icon_section',
        'type' => 'url',
    ]);
}

/**
 * Content options and controls
 */
function hhl_add_content_display_section($wp_customize)
{
    $wp_customize->add_section('content_display_section', [
        'title' => __('Content Options'),
        'description' => esc_html__('Blog and post options'),
        'priority' => 160,
    ]);
    $wp_customize->add_setting('show_post_date', [
        'default' => true,
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ]);
    $wp_customize->add_control('show_post_date', [
        'label' => __('Show Post Date', 'ephemeris'),
        'description' => esc_html__('Show the date with post titles.'),
        'section' => 'content_display_section',
        'priority' => 10,
        'type' => 'checkbox',
        'capability' => 'edit_theme_options',
    ]);
    $wp_customize->add_setting('home_grid_size', [
        'default' => 6,
        'transport' => 'refresh',
        'sanitize_callback' => '',
    ]);
    $wp_customize->add_control('home_grid_size', [
        'label' => __('Blog layout'),
        'description' => esc_html__('How many posts per row?'),
        'section' => 'content_display_section',
        'priority' => 10,
        'type' => 'radio',
        'capability' => 'edit_theme_options',
        'choices' => [
            '12' => __('One post per row'),
            '6' => __('Two posts per row'),
            '4' => __('Three posts per row'),
            '3' => __('Four posts per row'),
        ],
    ]);
}

// Background Colors for sections
function hhl_add_to_color($wp_customize)
{
    // the content bg setting
    $wp_customize->add_setting('content_background_color', [
        'default' => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    // the content bg control
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'content_background_color',
            [
                'label' => 'Content color',
                'section' => 'colors',
                'settings' => 'content_background_color',
            ]
        )
    );

    // the sidebar bg setting
    $wp_customize->add_setting('sidebar_background_color', [
        'default' => '#808080',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    // sidebar color control
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sidebar_background_color',
            [
                'label' => 'Sidebar color',
                'section' => 'colors',
                'settings' => 'sidebar_background_color',
            ]
        )
    );

    // settings?
    $wp_customize->add_setting('separator_01', [
        'default' => '',
        'sanitize_callback' => '',
    ]);

    // $wp_customize->add_control(
    //     new Lt_Separator_Customize_Control($wp_customize, 'separator_01', [
    //         'settings' => 'separator_01',
    //         'section' => 'colors',
    //         'priority' => 15,
    //     ])
    // );

    $wp_customize->add_setting('message_01', [
        'default' => '',
        'sanitize_callback' => '',
    ]);

    // $wp_customize->add_control(
    //     new Lt_Message_Customize_Control($wp_customize, 'message_01', [
    //         'label' => esc_html__('NOTE'),
    //         'description' =>
    //             'For text content you <i>might</i> consider using custom css...etc',
    //         'settings' => 'message_01',
    //         'section' => 'colors',
    //         'priority' => 20,
    //     ])
    // );
}
