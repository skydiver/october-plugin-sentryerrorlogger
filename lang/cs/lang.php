<?php

return [

    'plugin' => [
        'name' => 'Sentry pro Error Logger',
        'description' => 'Přidá podporu Sentry do pluginu Error Logger',
    ],

    'tab' => [
        'name' => 'Sentry',
    ],

    'fields' => [
        'sentry_enabled' => [
            'label' => 'Zapnout Sentry logování',
        ],
        'sentry_dsn' => [
            'label' => 'Sentry DSN',
        ],
        'sentry_level' => [
            'label'   => 'Úroveň logování',
            'comment' => 'Minimální úroveň logování která bude zachycena a odeslána na e-mail',
        ],
    ],
];
