<?php

/* include custom core config and define core path */
@include(dirname(__DIR__) . '/config.core.php');
if (!defined('MODX_CORE_PATH')) define('MODX_CORE_PATH', dirname(__FILE__) . '/core/');
/* include the modX class */
@include_once(MODX_CORE_PATH . "components/gitmodx/model/gitmodx/gitmodx.class.php");
$modx = new gitModx();

$modx->initialize('web');
$modx->getService('error', 'error.modError', '', '');


/** @var modRestService $rest */
$rest = $modx->getService('rest', 'rest.modRestService', '', [
    'basePath' => __DIR__ . '/controllers/',
    'controllerClassSeparator' => '',
    'controllerClassPrefix' => 'mvController',
    'xmlRootNode' => 'response',
    'requestParameter' => '_rest',
]);

$rest->prepare();
if (!$rest->checkPermissions()) {
    $rest->sendUnauthorized(true);
}

$rest->process();