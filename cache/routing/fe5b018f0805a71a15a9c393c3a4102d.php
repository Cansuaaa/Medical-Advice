<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-22 12:21:06
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___indexAction")->via("POST")->name("ajax.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("ajax.updatemyaccount");

