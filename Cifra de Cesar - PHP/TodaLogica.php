<?php

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
function converter($texto) { 

	
	$texto1 = strtr(utf8_decode($texto),utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ+'),'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy-');
	return strtolower($texto1); 

} 
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
function criptografia($t, $d) { // Função para cifrar

	// Define lista de caracteres do alfabeto
	$a = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', ' ');

	$converted = converter($t); // Essa parte converte o texto recebido
	$b = str_split($converted); 
	$num = strlen($converted); 
	$max = count($a) - 1; 
//------------------------------------------------------------------------------------------------------------------------------------
// Enquanto valor for menos que o número de caracteres do texto, executa o laçoo
// Se o caractere procesado estiver na lista de caracteres aceitos, prossegue
// Converte letras para números de acordo com a lista do alfabeto
	for($i=0; $i<$num; ++$i){ 
		if($b[$i] == in_array($b[$i], $a)){
			foreach($a as $chave => $valor){ 
				if($b[$i] == $valor){
				$c[$valor] = $chave;
				}
			}
		}
	}
//----------------------------------------------------------------------------------------------------------------
	// Usa o resultado da conversão de letra em número
	for($i=0; $i < $num ; $i++) {
   		$number = $c[$b[$i]]; 

   	if ($number == '26') { 
	$last = ' '; 
} else {
if ($d < 0) {  
$final = $number + $d; 
} else { 
$final = $number + $d; 
} if ($final < 0) { 
$last = $a[$final + $max]; 
} elseif ($final > $max - 1) { 
	   			$last = $a[$final - $max]; 
} else { 
$last = $a[$final]; 
	}
   		}

   		echo $last; // Exibe o resultado final (letra por letra)
	}
}

function descriptografia($t, $d) { // Função para decifrar

	// Define lista de caracteres do alfabeto
	$a = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', ' ');

	$converted = converter($t); // Converte o texto recebido
	$b = str_split($converted); // Cria uma lista com os caracteres separados
	$num = strlen($converted); // Conta o número de caracteres do texto
	$max = count($a) - 1; 

	for($i=0; $i<$num; ++$i){ 
		if($b[$i] == in_array($b[$i], $a)){
			foreach($a as $chave => $valor){ 
				if($b[$i] == $valor){
				$c[$valor] = $chave;
				}
			}
		}
	}

	for($i=0; $i < $num ; $i++) {
   		$number = $c[$b[$i]]; 

   		if ($number == '26') { 
   			$last = ' '; 
   		} else {
	   		if ($d < 0) { 
	   		$final = $number - $d; 
	   		} else { 
	   		$final = $number - $d; 
	   		}

	   		if ($final < 0) { 
				$last = $a[$final - $max]; 
	   		} elseif ($final > $max - 1) { 
	   			$last = $a[$final + $max]; 
	   		} else { 
	   			$last = $a[$final]; 
	   		}
   		}

   		echo $last; 
	}
}

?>
