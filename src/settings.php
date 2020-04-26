<?php

return [
    // Configurações passadas para o objeto App do Slim Framework
    'settings' => [
        // 'displayErrorDetails'    => true,
        'outputBuffering'        => 'prepend'
    ],

    // Configurações da aplicação
    'app' => [
        'renderer' => [
            'viewsPath' => APP_ROOT . '/templates/',
            'layout'    => 'layout.phtml'
        ]
    ]
];