<?php

$config = [
    'defaultRoute' => 'command/help',
    'controllerMap' => [
        'migrate' => '\luya\commands\MigrateController',
        'crud' => '\luya\commands\CrudController',
        'module' => '\luya\commands\ModuleController',
        'command' => '\luya\commands\CommandController',
        'import' => '\luya\commands\ImportController',
        'setup' => '\luya\commands\SetupController',
    ],
    'components' => [
        'mail' => [
            'class' => '\luya\components\Mail',
        ],
        'errorHandler' => [
            'class' => '\luya\cli\ErrorHandler',
            'memoryReserveSize' => 0,
        ],
    ],
    'bootstrap' => [
        'luya\cli\Bootstrap',
    ],
    'timezone' => 'Europe/Berlin',
];

return $config;
