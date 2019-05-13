<?php


/**
 * Possible values for repository are :
 *  - \Motia\TranslationsPort\Repositories\FileRepository::class
 *  - \Motia\TranslationsPort\Repositories\VschTranslationsLoader::class
 *  - \Motia\TranslationsPort\Repositories\RestRepository::class
 */
return [
    'loader' => \Motia\TranslationsPort\Loaders\VschTranslationsLoader::class,
    'groups' => ['client_app'],
    'rest_url' => null,
    'locales' => ['en', 'fr', 'es'],
    'import' => [
        'dir' => null,
    ],
    'export' => [
        'dir' => null,
        'format' => 'json'
    ],
];
