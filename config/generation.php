<?php

return [
    [ // For Country...
        'source' => __DIR__.'/../node_modules/circle-flags/flags',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'c-',
        'safe' => true,
    ],
    [ // For Language...
        'source' => __DIR__.'/../node_modules/circle-flags/flags/language',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'l-',
        'safe' => true,
    ],
];