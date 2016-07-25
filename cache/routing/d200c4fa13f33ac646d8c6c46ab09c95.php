<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-25 10:31:56
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "MyAccountController::___indexAction")->via("GET")->name("myaccount.index");
$app->map("/editMyAccount", "MyAccountController::___editMyAccount")->via("GET")->name("editmyaccount.index");

