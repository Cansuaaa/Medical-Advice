<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 03:13:29
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___indexAction")->via("POST")->name("ajax.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("ajax.updatemyaccount");
$app->map("/ajax/editPassword", "AjaxController::___editPassword")->via("POST")->name("ajax.editpassword");

