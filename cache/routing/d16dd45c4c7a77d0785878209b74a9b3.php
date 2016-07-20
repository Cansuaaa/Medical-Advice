<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-19 10:05:39
 */

$app = Yee\Yee::getInstance();

$app->map("/ajaxlogin", "AjaxLoginController::___LoginAction")->via("GET")->name("login.index");

