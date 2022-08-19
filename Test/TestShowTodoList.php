<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
// require_once __DIR__ . "/../Model/TodoList.php";
// require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

$todoList[1] = "Belajar Dasar PHP";
$todoList[2] = "Belajar Dasar Javascript";
$todoList[3] = "Belajar Dasar GoLang";

showTodoList();