<?php 

$nums = array(43,4,21,2,1,9,24,2,99,23,8,7,114,92,5);

foreach ($nums as $key => $value) {
	$numx=$value;
	check($numx);
}


function check($numx){
	echo $numx;
	for ($i=1; $i <= $numx; $i++) { 
		$res[$i] = division($numx,$i);

	}	

//var_dump($res);
	foreach ($res as $key => $v) {
		if(!is_float($v))
			$numeros[]=$v;	
	}

	$resultado = count($numeros);

	if ($resultado>2) {
		echo " No es un Numero primo!<br>";
	}
	else{
		echo " Es un Numero primo!<br>";	
	}

}

//numeros primos divisible por si mismo y por 1
function division($numx,$num){
 return $d[$num]=$numx/$num; 
}


 ?>