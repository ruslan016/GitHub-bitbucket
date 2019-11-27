<?php

return [
    'routes'   => [
        '/' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'index'
        ],
        '/admin' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'admin'
        ],
        '/register' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'register'
        ],
        '*' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'error'
        ]
    ],
    'services' => [
        'database' => [
            'call'   => 'Pop\Db\Db::connect',
            'params' => [
                'adapter' => 'Mysql',
                'options' => [
                    'database' => 'patient',
                    'username' => 'root',
                    'password' => '',
                    'host'     => 'localhost'
                ]
            ]
        ]
    ]
];