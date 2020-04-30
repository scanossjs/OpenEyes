<?php
/**
 * This is the bootstrap file for test application.
 * This file should be removed when the application is deployed for production.
 */
// Test 2
// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.5.r2654/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/test.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// Test
require_once($yii);
// Test comment
Yii::createWebApplication($config)->run();
