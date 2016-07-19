<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 07:34:32
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___indexAction")->via("GET")->name("ajax.index");

