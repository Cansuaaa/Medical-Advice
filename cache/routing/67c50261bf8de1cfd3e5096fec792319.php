<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-08-01 07:29:38
 */

$app = Yee\Yee::getInstance();

$app->map("/addCategory", "CategoryController::___addCategory")->via("GET")->name("addcategory.index");
$app->map("/categoryList", "CategoryController::___categoryList")->via("GET")->name("categorylist.index");

