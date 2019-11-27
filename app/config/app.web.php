<?php

return [
    'routes'   => [
        '/' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'index'
        ],
        '/post' => [
            'controller' => 'Tutorial\Controller\IndexController',
            'action'     => 'post'
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