<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            'phone' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'unique' => true,
                    'null' => false
                ],
                'index' => 1200
            ]
        ]
    ]
];