<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 01:10:40
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___indexAction")->via("POST")->name("ajax.index");

