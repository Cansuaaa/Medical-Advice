<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 10:46:25
 */

$app = Yee\Yee::getInstance();

$app->map("/questionForm", "ArticleController::___indexAction")->via("GET")->name("questionform.index");
$app->map("/addQuestion", "ArticleController::___addArticle")->via("GET")->name("addquestion.index");

