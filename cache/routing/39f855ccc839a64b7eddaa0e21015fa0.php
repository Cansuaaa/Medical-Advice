<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-28 03:08:57
 */

$app = Yee\Yee::getInstance();

$app->map("/questionList", "QuestionController::___indexAction")->via("GET")->name("questionlist.index");
$app->map("/addQuestion", "QuestionController::___addArticlePost")->via("GET")->name("addquestion.index");
$app->map("/questionList", "QuestionController::___questionList")->via("GET")->name("questionlist.index");

