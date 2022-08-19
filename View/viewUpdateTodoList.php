<?php

require_once "Model/TodoList.php";
require_once "Helper/Input.php";
require_once "BusinessLogic/UpdateTodoList.php";

/*
 * tampilan merubah data
 * */
function viewUpdateTodoList()
{
	echo PHP_EOL . "MERUBAH TODO" . PHP_EOL;
	global $todoList;
	
	/*
	 * cek todo list,
	 * ketika todo list masih kosong maka tidak bisa melakukan update
	 * */
	$jmlTodoList = sizeof($todoList);
	if ($jmlTodoList) {
		$number = (int)input("Number Ke (x untuk batal)");
		$todo = '';
		
		if ($number == 'x') {
			echo "Batal Merubah Todo" . PHP_EOL;
		} else if ($number == '' || $number == 0) {
			echo "Number belum diisi" . PHP_EOL;
		} else {
			
			/*
			 * setelah number diisi baru melakukan isi nilai yang diupdate
			 * */
			$todo = (string)input("Todo Update (x untuk batal)");
			if ($todo == 'x') {
				echo "Batal Merubah Todo" . PHP_EOL;
			}
		}
		
		if ($todo == '') {
			echo "Todo belum diisi" . PHP_EOL;
		} else {
			updateTodoList($number, $todo);
		}
	} else {
		echo "Maaf TodoList Masih Kosong" . PHP_EOL;
	}
	
}