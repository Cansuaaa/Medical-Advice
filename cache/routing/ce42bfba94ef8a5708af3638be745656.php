<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 01:10:40
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:activation_code", "ActivationController::___indexAction")->via("GET")->name("activation.index");

