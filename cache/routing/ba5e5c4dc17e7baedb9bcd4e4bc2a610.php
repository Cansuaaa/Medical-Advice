<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-15 02:08:23
 */

$app = Yee\Yee::getInstance();

$app->map("/test", "TestController::___testAction")->via("GET")->name("test.index");

