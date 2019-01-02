<?php

/**
 * Extension Manager/Repository config file for ext "kinderdorf_schneckenmuehle".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Kinderdorf Schneckenmühle',
    'description' => 'Kinderdorf Schneckenmühle, das sind Ferien',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KinderdorfSchneckenmuehleEv\\KinderdorfSchneckenmuehle\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Gregor Suhr',
    'author_email' => 'gregor.suhr@schneckenmuehle.de',
    'author_company' => 'Kinderdorf Schneckenmühle e.V.',
    'version' => '1.0.0',
];
