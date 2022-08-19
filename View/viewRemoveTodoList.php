<?php

require_once "Helper/Input.php";
require_once "BusinessLogic/RemoveTodoList.php";
/*
 * tampilan menghapus data
 * */
function viewRemoveTodoList()
{
	echo PHP_EOL."MENGHAPUS TODO".PHP_EOL;
	
	$pilhan = input("Nomor");
	
	if ($pilhan=='x'){
		echo "Batal Menghapus Todo";
	}else{
		$success = removeTodoList((int)$pilhan);
		if ($success){
			// batal
			echo "Sukses menghapus todo nomor $pilhan". PHP_EOL;
		}else{
			echo "Gagal menghapus todo nomor $pilhan". PHP_EOL;
		}
	}
}