<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://comments/comments.yaml',
    'modified' => 1527054870,
    'data' => [
        'enabled' => true,
        'enable_on_routes' => [
            0 => '/blog'
        ],
        'disable_on_routes' => [
            0 => '/blog/blog-post-to-ignore',
            1 => '/ignore-this-route'
        ],
        'form' => [
            'name' => 'comments',
            'fields' => [
                0 => [
                    'name' => 'name',
                    'label' => 'PLUGIN_COMMENTS.NAME_LABEL',
                    'placeholder' => 'PLUGIN_COMMENTS.NAME_PLACEHOLDER',
                    'autocomplete' => 'on',
                    'type' => 'text',
                    'validate' => [
                        'required' => true
                    ]
                ],
                1 => [
                    'name' => 'email',
                    'label' => 'PLUGIN_COMMENTS.EMAIL_LABEL',
                    'placeholder' => 'PLUGIN_COMMENTS.EMAIL_PLACEHOLDER',
                    'type' => 'email',
                    'validate' => [
                        'required' => true
                    ]
                ],
                2 => [
                    'name' => 'text',
                    'label' => 'PLUGIN_COMMENTS.MESSAGE_LABEL',
                    'placeholder' => 'PLUGIN_COMMENTS.MESSAGE_PLACEHOLDER',
                    'type' => 'textarea',
                    'validate' => [
                        'required' => true
                    ]
                ],
                3 => [
                    'name' => 'date',
                    'type' => 'hidden',
                    'process' => [
                        'fillWithCurrentDateTime' => true
                    ]
                ],
                4 => [
                    'name' => 'title',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.page.header.title'
                ],
                5 => [
                    'name' => 'lang',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.language.getLanguage'
                ],
                6 => [
                    'name' => 'path',
                    'type' => 'hidden',
                    'evaluateDefault' => 'grav.uri.path'
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'value' => 'PLUGIN_COMMENTS.SUBMIT_COMMENT_BUTTON_TEXT'
                ]
            ],
            'process' => [
                0 => [
                    'email' => [
                        'subject' => 'PLUGIN_COMMENTS.EMAIL_NEW_COMMENT_SUBJECT',
                        'body' => '{% include \'forms/data.html.twig\' %}'
                    ]
                ],
                1 => [
                    'addComment' => NULL
                ],
                2 => [
                    'message' => 'PLUGIN_COMMENTS.THANK_YOU_MESSAGE'
                ],
                3 => [
                    'reset' => true
                ]
            ]
        ]
    ]
];
