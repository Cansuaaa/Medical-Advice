<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-26 03:13:29
 */

$app = Yee\Yee::getInstance();

$app->map("/questionForm", "QuestionController::___indexAction")->via("GET")->name("questionform.index");
$app->map("/addQuestion", "QuestionController::___addArticlePost")->via("GET")->name("addquestion.index");

