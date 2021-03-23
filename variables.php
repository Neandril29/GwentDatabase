<?php
/*
 * Setup your postgres configuration
 */
$database_server    = 'localhost';
$database_name      = 'gwentdb';
$database_user      = 'postgres';
$database_pass      = 'admin';
$database_schema    = 'card';

/*
$locales = ['cn' => 'zh-CN', 'de' => 'de-DE', 'en' => 'en-US', 'es' => 'es-ES',
            'fr' => 'fr-FR', 'it' => 'it-IT', 'jp' => 'ja-JP', 'kr' => 'ko-KR',
            'mx' => 'es-MX', 'pl' => 'pl-PL', 'pt' => 'pt-BR', 'ru' => 'ru-RU'];
*/			
$locales = ['fr' => 'fr-FR'];


/* the script takes a while due to 
 * almost 30 versions of the game 
 * being fed into the Database
 */
ini_set("max_execution_time", 0);

/*
 * This will require updates for new versions.
 */
$versions = [
     '8.0.0' => 'data\cards_v8.0.0.json',
     '8.1.0' => 'data\cards_v8.1.0.json',
     '8.2.0' => 'data\cards_v8.2.0.json',
     '8.3.0' => 'data\cards_v8.3.0.json'
];