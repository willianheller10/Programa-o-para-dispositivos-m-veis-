<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cifra de César</title>
	
</head>
<body>

<?php                     // ESSA PARTE É VOLTADA PARA INCLUSÃO DO ARQUIVO "FUNÇÃO.PHP", ONDE SE ENCONTRA TODA A LÓGICA
						  // UTILIZEI O METODO GET, POIS VOU HOSPEDAR EM UM SERV. WEB PARA VC VISUALIZAR... TEM O METODO "POST", MAS OPTEI PELO "GET"...
						  // AQUI DECLAREI AS VARIAVEIS PARA EFETUAR A CIFRAGEM E DECIFRAGEM, A LOGICA ENCONTRA-SE NO ARQUIVO "FUNÇÃO.PHP"..
include("TodaLogica.php"); // --------------------------------------------------------------------------------------------------------------------------------

if (isset($_GET['tipo'])) { 																				
	if ($_GET['tipo'] == 0) { 
		$opcao1 = 'will=""'; 
		$opcao2 = null; 
	} else { 
		$opcao2 = 'will=""'; 
		$opcao1 = null; 
	}
} else { 
	$opcao1 = null;
	$opcao2 = null;
} //--------------------------------------------------------------------------------------------------------------------------------------------------------

?>

<h3>  Criptografia com Cifra de César </h3> <!-- =================================================================================================================  -->
<form target="" method="GET"> <!-- Início do Formulário com o método GET  -->
<h4>Chave - K:</h4>
<input type="number" name="d" class="number" value="<?php echo $_GET['d']; ?>" min="-26" max="26"><br>
<h4>Mensagem:</h4>
<textarea id="input" name="c"  class="criptografia" cols="30">
<?php if(isset($_GET['c'])) { echo $_GET['c']; } ?></textarea>
			<br><br>
			
				<smail>Resultado:</smail>
				<?php 
					if (isset($_GET['c'])) { 
						$cript = $_GET['c']; 

						if ($_GET['d'] != '') { 
							$desl = $_GET['d']; 
						} else {
							$desl = 0; 
						}

						if ($_GET['tipo'] == 0) {  
							criptografia($cript, $desl); 
						} else {
							descriptografia($cript, $desl); 
						}

					}
					
				?>
			<!-- =====================================================================================================================================================  -->
			<br><br> <?php//-------------------------------------------------------------------------------------------------------------
			 			// AQUI É VOLTADO PARA A OPÇÃO DE CIFRAR E DECIFRAR E TAMBEM O BOTÃO SUBMIT QUE CUIDA DO ENVIO DA INFORMAÇÃO COM O METODO "GET"  ?>
			<select class="cripting" name="tipo"> 
				<option value="0" <?php echo $opcao1; ?>>CIFRAR</option> <option value="1" <?php echo $opcao2; ?>>DECIFRAR</option>
			</select>
			<br>
			<br>

			<button type="submit" class="botao">Executar</button> 
		</form>
		<br><br>
					 <?php //------------------------------------------------------------------------------------------------------------?>
					 
					 


<p><h3>2. ROTEIRO DE TESTE</h3></p>

<hr>
<p><h4>2.1. Teste 1</h4></p>
• Operação: Criptografia de texto</br>
• Chave: K = 3</br>
• Texto Claro: Seguranca de Redes de Computadores</br>
• Qual é o texto cifrado obtido? <b>vhjxudqfd gh uhghv gh frpsxwdgruhv</b></br>
<hr>
<p><h4>2.2. Teste 2</h4></p>
• Operação: Criptografia de texto</br>
• Chave: K = 3</br>
• Texto Claro: LaTeX</br>
• Qual é o texto cifrado obtido? <b>odwha</b></br>
<hr>
<p><h4>2.2. Teste 3</h4></p>
• Operação: Criptografia de texto</br>
• Chave: K = 5</br>
• Texto Claro: Seguranca de Redes de Computadores</br>
• Qual é o texto cifrado obtido? <b>xjlzwfshf ij wjijx ij htruzyfitwjx</b></br>
<hr>
<p><h4>2.2. Teste 4</h4></p>
• Operação: Criptografia de texto</br>
• Chave: K = 5</br>
• Texto Claro: Sequencia final do alfabeto xyz</br>
• Qual é o texto cifrado obtido? <b>xjvzjshnf knsfq it fqkfgjyt cde</b></br>
<hr>
<p><h4>2.2. Teste 5</h4></p>
• Operação: Decriptografia de texto</br>
• Chave: K = 3</br>
• Texto Cifrado: Fliud gh Fhvdu sdud fkdyh N ljxdo d wuhv</br>
• Qual é o texto claro obtido? <b>cifra de cesar para chave k igual a tres	</b></br>
<hr>
<p><h4>2.2. Teste 6</h4></p>
• Operação: Decriptografia de texto</br>
• Chave: K = 5</br>
• Texto Cifrado: Yjxyfsyt ijhwnuytlwfknf ufwf tx hfwfhyjwjx FHJ htr hmfaj P nlzfq f hnsht</br>
• Qual é o texto claro obtido?<b> testanto decriptografia para os caracteres com chave k igual a cinco</b></br>
</br>
<hr>


</body>
</html>