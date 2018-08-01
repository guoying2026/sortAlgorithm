<?php
//冒泡排序20180801guoying
$arr = [98,34,67,45,23,68,12,80,39,79];

//交换函数
function interchange(&$arr,$low,$high){
	$temp = $arr[$low];
	$arr[$low] = $arr[$high];
	$arr[$high] = $temp;
}

function bubblesort(&$arr)
{
	$length = count($arr);
	$sum = 0;
	for($i = 0;$i < $length-1;$i++){
		$swap = false;
		//计算时间复杂度
		for($j = 0;$j < $length-$i-1;$j++){
			if($arr[$j] < $arr[$j+1]){
				interchange($arr,$j,$j+1);
				$swap = true;
			}
		}
		$sum += $i*$j;
		if(true != $swap){
			break;
		}
	}
	var_dump($sum);
	var_dump($arr);
	return $arr;
}
bubblesort($arr);