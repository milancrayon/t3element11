<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3element',
    'description' => 'Create Custom Element using T3element',
    'category' => 'be',
    'author' => 'T3Element',
    'author_email' => 'info@t3element.com',
    'author_company' => 'Crayonwebstudio private limited',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            "Crayon\\T3element\\" => "Classes",
        ],
    ],
];
