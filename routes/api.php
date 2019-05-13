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

if (config('translations-port.missing_messages_prefix')) {
  \Motia\TranslationsPort\Controllers\MissingMessagesController::routes([
    'prefix' => config('translations-port.missing_messages_prefix'),
  ]);
}

if (config('translations-port.messages_prefix')) {
    MessagesController::routes([
      'prefix' => config('translations-port.messages_prefix'),
    ]);
}
