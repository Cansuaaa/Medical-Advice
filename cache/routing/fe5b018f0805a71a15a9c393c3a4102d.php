<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-29 02:02:46
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___indexAction")->via("POST")->name("ajax.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("ajax.updatemyaccount");
$app->map("/ajax/editPassword", "AjaxController::___editPassword")->via("POST")->name("ajax.editpassword");
$app->map("/ajax/addQuestion", "AjaxController::___addQuestion")->via("POST")->name("ajax/addquestion");
$app->map("/ajax/addCategory", "AjaxController::___addCategory")->via("POST")->name("ajax/addcategory");

