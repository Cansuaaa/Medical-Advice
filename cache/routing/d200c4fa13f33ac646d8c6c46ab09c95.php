<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 02:13:44
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "MyAccountController::___indexAction")->via("GET")->name("myaccount.index");

