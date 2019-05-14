## Translations Server

A side-car server to use with your laravel-translations-port


## Environment
    # yandex translator api key for vsch/laravel-translations-manager
    YANDEX_TRANSLATOR_KEY=

    # prefix for the endpoints to store missing messages 
    TRANSLATION_MISSING_PREFIX=i18n/missing

    # prefix for the endpoints to store missing messages  
    TRANSLATION_MESSAGES_PREFIX=i18n/messages
    
    # exposable groups
    TRANSLATION_GROUPS=web_app,mobile_app
    
    # editable and exposable locales
    TRANSLATION_LOCALES=en,es,fr

    # DB connections prefix; defaults to empty
    DB_PREFIX=i18n_
    
## Features
- Disabled Registration
- Create users and admins(see below) with command line using [laravel-make-user](https://github.com/michaeldyrynda/laravel-make-user). `php artisan make:user`
- Create admin users by setting the custom property `is_admin=1`
- Log viewer just in case..
