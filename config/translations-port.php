<?php


/**
 * Possible values for repository are :
 *  - \Motia\TranslationsPort\Repositories\FileRepository::class
 *  - \Motia\TranslationsPort\Repositories\VschTranslationsLoader::class
 *  - \Motia\TranslationsPort\Repositories\RestRepository::class
 */
return [
    'loader' => \Motia\TranslationsPort\Loaders\VschTranslationsLoader::class,
    'groups' => array_filter(explode(',', env('TRANSLATION_GROUPS', ''))),
    'rest_url' => null,
    'locales' => explode(',', env('TRANSLATION_LOCALES', 'en')),
    'import' => [
        'dir' => null,
    ],
    'export' => [
        'dir' => null,
        'format' => 'json'
    ],

    // whether to register routes to store missing
    'missing_messages_prefix' => env('TRANSLATION_MISSING_PREFIX'),
    'messages_prefix' => env('TRANSLATION_MESSAGES_PREFIX'),
];
