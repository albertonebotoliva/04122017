<?php 
function maxMoneyICouldHaveDone ( $arr = array() ) {
	$result = "";
	ksort($arr);
	if (array_search(max($arr),$arr) > array_search(min($arr),$arr)){
		$result = max($arr) - min($arr);
	}  else {
		foreach ($arr as $key => $value) {
			if ( !isset($max) && !isset($min) ){
				$max = $min = $value;
			}
			if ( $value < $max && $max == $min ) {
				$max = $value;
			} else if ( $value > $max){ 
				$max = $value;
			}
			if ( $value < $min )
		  		$min = $value;
		}
		$result = $max - $min;
	}
	return $result;
}
?>