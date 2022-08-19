<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/viewAddTodoList.php";
require_once "View/viewRemoveTodoList.php";
require_once "View/viewShowTodoList.php";

echo "Aplikasi Todo List".PHP_EOL;

viewShowTodoList();

// echo __DIR__;