<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 12:29:53
 */

$app = Yee\Yee::getInstance();

$app->map("/addCategory", "CategoryController::___addCategory")->via("GET")->name("addcategory.index");
$app->map("/categoryList", "CategoryController::___categoryList")->via("GET")->name("categorylist.index");

