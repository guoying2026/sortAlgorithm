<?php
//快速排序20180721
$arr = [34,45,56,79,88,36,90,12,54,65];

//交换函数
function interchange(&$arr,$low,$high){
	$temp = $arr[$low];
	$arr[$low] = $arr[$high];
	$arr[$high] = $temp;
}

//低位是$low,高位是$high,枢纽从$mark=$low开始
function partition(&$arr,$low,$high){
	$mark = $arr[$low];
	while($low < $high){
		while($low < $high && $arr[$high] >= $mark){
			$high--;
		}
		interchange($arr,$low,$high);
		while($low < $high && $arr[$low] <= $mark){
			$low++;
		}
		interchange($arr,$low,$high);
	}
	return $low;
}

function quicklysort(&$arr,$low,$high){
	if($low<$high){
		$mark = partition($arr,$low,$high);//1分为2算出枢纽值
		quicklysort($arr,$low,$mark-1);
		quicklysort($arr,$mark+1,$high);
		var_dump($low);
		var_dump($arr);
	}
}
function main($arr){
	$high = count($arr)-1;
	$low = 0;
	quicklysort($arr,$low,$high); 
}
main($arr);