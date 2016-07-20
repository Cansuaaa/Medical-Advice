<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 11:13:32
 */

$app = Yee\Yee::getInstance();

$app->map("/myAccount", "myAccountController::___indexAction")->via("GET")->name("myaccount.index");

