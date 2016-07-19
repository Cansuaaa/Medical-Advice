<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 11:17:41
 */

$app = Yee\Yee::getInstance();

$app->map("/ajaxlogin", "AjaxLoginController::___LoginAction")->via("GET")->name("login.index");

