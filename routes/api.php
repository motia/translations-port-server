<?php

use Motia\TranslationsPort\Controllers\MessagesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

MessagesController::routes([
  'prefix' => 'localization/messages',
]);


if (env('SAVE_MISSING_TRANSLATIONS')) {
  \Motia\TranslationsPort\Controllers\MissingMessagesController::routes([
    'prefix' => 'trans-export',
  ]);
}
