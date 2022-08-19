<?php

require_once "View/viewShowTodoList.php";
require_once "View/viewAddTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/UpdateTodoList.php";

addTodoList("Belajar Dasar PHP");
addTodoList("Belajar Dasar Javascript");
addTodoList("Belajar Dasar GoLang");
addTodoList("Mohammad Zuz");
addTodoList("Ubaidillah");

showTodoList();

viewUpdateTodoList();

showTodoList();
