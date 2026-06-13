<?php
/**
 * Этот файл является частью виджета веб-приложения RosGear.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => BACKEND,
    'id'          => 'rg.wd.codemirror',
    'category'    => 'editor',
    'name'        => 'CodeMirror',
    'description' => 'Extensible Code Editor',
    'namespace'   => 'Rg\Widget\CodeMirror',
    'path'        => '/rg/rg.wd.codemirror',
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => ['rg.be.workspace:onRender'],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM'],
        ['module', 'id' => 'rg.be.workspace']
    ]
];
