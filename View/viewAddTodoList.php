<?php

require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/AddTodoList.php";

/*
 * tampilan menambahkan data
 * */
function viewAddTodoList()
{
	echo PHP_EOL."MENAMBAH TODO".PHP_EOL;
	
	$todo = input("Todo (x untuk batal)");
	
	if ($todo=='x'){
		// batal
		echo "Batal Menambah Todo" . PHP_EOL;
	}else if ($todo==''){
		echo "Todo belum diisi" . PHP_EOL;
	}else{
		addTodoList($todo);
	}
}