<?php
/*
	Скалярные типы
	*/

function sumOfInts(int ...$ints){
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

?>