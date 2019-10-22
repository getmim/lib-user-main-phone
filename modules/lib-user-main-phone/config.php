<?php

return [
    '__name' => 'lib-user-main-phone',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-main-phone.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-main-phone' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user-main' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user' => [
                'phone' => [
                    'type' => 'text'
                ]
            ]
        ]
    ],
    'libForm' => [
        'forms' => [
            'admin.me.setting.profile' => [
                'phone' => [
                    'type' => 'tel',
                    'label' => 'Phone',
                    'xpos' => 'right',
                    'xindex' => 1,
                    'rules' => [
                        'required' => true,
                        'unique' => [
                            'model' => 'LibUser\\Library\\Fetcher',
                            'field' => 'phone',
                            'self' => [
                                'service' => 'user.id',
                                'field' => 'id'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];