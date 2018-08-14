<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/deltaecho3/Development/grav-pattern-library-template/user/config/site.yaml',
    'modified' => 1529575936,
    'data' => [
        'title' => 'Atomic Pattern Library',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Darryll DeCoster',
            'email' => 'darryll@decoster.design'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Pattern Library template base on the Atomic Pattern concept by Brad Frost',
            'keywords' => 'design, interactions, UI, UX, patterns, library, user interface design'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'navigation' => [
            'interface' => [
                0 => 'Atoms',
                1 => 'Molecules',
                2 => 'Organisms',
                3 => 'Templates',
                4 => 'Pages'
            ],
            'secondary' => [
                0 => 'Patterns'
            ]
        ]
    ]
];
