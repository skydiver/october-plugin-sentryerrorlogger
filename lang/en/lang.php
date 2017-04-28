<?php

    return [

        'plugin' => [
            'name'        => 'Sentry support for Error Logger',
            'description' => 'Extend Error Logger to support Sentry',
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
            'sentry_level' => [
                'label'   => 'Logging level',
                'comment' => 'The minimum logging level at which this handler will be triggered'
            ],
        ],


    ];

?>