<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
// require_once __DIR__ . "/../Model/TodoList.php";
// require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

addTodoList("Belajar Dasar PHP");
addTodoList("Belajar Dasar Javascript");
addTodoList("Belajar Dasar GoLang");
addTodoList("Mohammad Zuz");
addTodoList("Ubaidillah");

showTodoList();

removeTodoList(3);

showTodoList();

var_dump(removeTodoList(22));