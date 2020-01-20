<?php

function ju_registered_required_plugins() {
    $plugins = [
        [
            'name' => 'Adsense WP Quads',
            'slug' => 'quick-adsense-reloaded',
            'required' => true
        ],
        [
            'name' => 'recipe',
            'slug' => 'recipe',
            'source' => get_template_directory() . '/plugins/recipe.zip',
            'required' => true
        ]
    ];

    $config = [
        'id' => 'udemy',
        'menu' => 'tgmpa-install-plugins',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => true
    ];

    tgmpa($plugins, $config);

}