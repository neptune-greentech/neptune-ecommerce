<?php
/*
 * Theme customizer reassurance pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_reassurance');

function neptune_customizer_reassurance($wp_customize)
{
    $wp_customize->add_section('neptune_section_reassurance', [
        'title' => __('Reassurance', 'neptune'),
        'description' => __("Please add your text reassurance.", 'neptune'),
        'priority' => 82,
    ]);

    // Reassurance 1
    $wp_customize->add_setting('neptune_reassurance_1', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_reassurance_1',
            [
                'label' => __('Reassurance 1', 'neptune'),
                //'description' => __('Please enter your Facebook account link', 'neptune'),
                'section' => 'neptune_section_reassurance',
                'settings' => 'neptune_reassurance_1',
                'type' => 'text',
            ]
        )
    );

    // Reassurance 2
    $wp_customize->add_setting('neptune_reassurance_2', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_reassurance_2',
            [
                'label' => __('Reassurance 2', 'neptune'),
                //'description' => __('Please enter your Facebook account link', 'neptune'),
                'section' => 'neptune_section_reassurance',
                'settings' => 'neptune_reassurance_2',
                'type' => 'text',
            ]
        )
    );

    // Reassurance 3
    $wp_customize->add_setting('neptune_reassurance_3', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_reassurance_3',
            [
                'label' => __('Reassurance 3', 'neptune'),
                //'description' => __('Please enter your Facebook account link', 'neptune'),
                'section' => 'neptune_section_reassurance',
                'settings' => 'neptune_reassurance_3',
                'type' => 'text',
            ]
        )
    );

    // Reassurance 4
    $wp_customize->add_setting('neptune_reassurance_4', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_reassurance_4',
            [
                'label' => __('Reassurance 4', 'neptune'),
                //'description' => __('Please enter your Facebook account link', 'neptune'),
                'section' => 'neptune_section_reassurance',
                'settings' => 'neptune_reassurance_4',
                'type' => 'text',
            ]
        )
    );

}
