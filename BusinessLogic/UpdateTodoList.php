<?php

/*
 * Merubah data
 * */
function updateTodoList(int $number,string $todo)
{
	global $todoList;
	
	if($number > sizeof($todoList)){
		echo "Number $number tidak ditemukan".PHP_EOL;
	}
	
	$todoList[$number] = $todo;
}