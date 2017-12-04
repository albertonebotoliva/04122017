<?php 
function permutatorEngine($str,$i,$n,&$arr) {
	if ($i == $n){
			$arr[] = $str;
	} else {
		for ($j = $i; $j < $n; $j++) {
    		permute($str,$i,$j);
          	permutatorEngine($str, $i+1, $n,$arr);
          	permute($str,$i,$j); 
       	}
   	}
}

function permute(&$str,$i,$j) {
    $aux = $str[$i];
    $str[$i] = $str[$j];
    $str[$j] = $aux;
}   
?>