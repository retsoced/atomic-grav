<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/deltaecho3/Development/grav-pattern-library-template/user/plugins/comments/blueprints.yaml',
    'modified' => 1527054870,
    'data' => [
        'name' => 'Comments',
        'version' => '1.2.7',
        'description' => 'Adds a commenting functionality to your site',
        'icon' => 'comment',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-comments',
        'keywords' => 'guestbook, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-comments/issues',
        'readme' => 'https://github.com/getgrav/grav-plugin-comments/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'form',
            1 => 'email'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
