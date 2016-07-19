<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 09:15:18
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:activation_code", "ActivationController::___indexAction")->via("GET")->name("activation.index");

