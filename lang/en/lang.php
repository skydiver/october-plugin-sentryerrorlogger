<?php

    return [

        'plugin' => [
            'name'        => 'Sentry support for Error Logger',
            'description' => 'Extend Error Logger to support Sentry',
            'author'      => 'Martin M.'
        ],

        'tab' => [
            'name' => 'Sentry',
        ],

        'fields' => [
            'sentry_enabled' => [
                'label' => 'Enable Sentry tracking'
            ],
            'sentry_dsn' => [
                'label' => 'Sentry DSN'
            ],
        ],


    ];

?>