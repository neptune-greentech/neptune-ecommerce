<?php
/*
 * Theme customizer bar pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_bar');

function neptune_customizer_bar($wp_customize)
{
    $wp_customize->add_section('neptune_section_bar', [
        'title' => __('Bar', 'neptune'),
        'description' => __("Please add your text bar.", 'neptune'),
        'priority' => 61,
    ]);

    $wp_customize->add_setting('neptune_bar', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_bar',
            [
                'label' => __('Bar', 'neptune'),
                'section' => 'neptune_section_bar',
                'settings' => 'neptune_bar',
                'type' => 'text',
            ]
        )
    );

    $wp_customize->add_setting('neptune_bar_link', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_bar_link',
            [
                'label' => __('Bar link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://', 'neptune'),
                ],
                'section' => 'neptune_section_bar',
                'settings' => 'neptune_bar_link',
                'type' => 'text',
            ]
        )
    );

}
