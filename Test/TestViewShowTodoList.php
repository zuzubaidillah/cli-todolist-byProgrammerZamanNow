<?php

require_once "View/viewShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Belajar Dasar PHP");
addTodoList("Belajar Dasar Javascript");
addTodoList("Belajar Dasar GoLang");
addTodoList("Mohammad Zuz");
addTodoList("Ubaidillah");

viewShowTodoList();

