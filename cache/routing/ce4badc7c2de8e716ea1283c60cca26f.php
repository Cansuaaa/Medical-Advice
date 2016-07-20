<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 01:10:40
 */

$app = Yee\Yee::getInstance();

$app->map("/signup", "SignupController::___indexAction")->via("GET")->name("signup.index");
$app->map("/signup2", "SignupController::___indexPostAction")->via("POST")->name("post action");

