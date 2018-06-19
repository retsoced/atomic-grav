<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/deltaecho3/Development/grav-pattern-library-template/user/themes/patternlibrary/blueprints.yaml',
    'modified' => 1527060131,
    'data' => [
        'name' => 'Pattern Library',
        'version' => '1.0.0',
        'description' => 'Pattern library is a template for building an interaction library based on Atomic Design.',
        'icon' => 'book',
        'author' => [
            'name' => 'Darryll DeCoster',
            'email' => 'darryll@decoster.design',
            'url' => 'http://decoster.design'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-learn2',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'heme, docs, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-learn2/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'top_level_version' => [
                    'type' => 'toggle',
                    'label' => 'Top Level Version',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'home_url' => [
                    'type' => 'text',
                    'label' => 'Home URL',
                    'placeholder' => 'http://decoster.design',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'google_analytics_code' => [
                    'type' => 'text',
                    'label' => 'Google Analytics Code',
                    'placeholder' => 'UA-XXXXXXXX-X',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'github.position' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'GitHub Position',
                    'options' => [
                        'top' => 'Top',
                        'bottom' => 'Bottom',
                        'off' => 'Off'
                    ]
                ],
                'github.tree' => [
                    'type' => 'text',
                    'label' => 'GitHub Tree',
                    'default' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/'
                ],
                'github.commits' => [
                    'type' => 'text',
                    'label' => 'GitHub Commits',
                    'default' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
                ]
            ]
        ]
    ]
];
