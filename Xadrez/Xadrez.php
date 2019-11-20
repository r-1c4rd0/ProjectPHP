<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Xadrez</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body bgcolor="#ebebeb">
		<div id="box">
			<?php
				require_once('Xadrez.class.php');
				$xadrez = new Xadrez();

				$xadrez->gerarTabuleiro();
				$xadrez->posicionarPecas();
				$contar = count($xadrez->tabuleiro);
				$num = 0;
				$cores = array( 1 => 'preto', 0 => 'branco');

				foreach ($xadrez->tabuleiro as $indice => $valor):
					$num++;
				if($num == 9){
					$cores = array_reverse($cores);
				}

		$exibir = (strstr($valor, 'branco') || strstr($valor, 'preto')) ? '<img src="pecas/'.$valor.'.png" />': $valor ;
					if($num%8 == 0):
						echo '<div class="quadrado '.$cores[$num%2].'">'.$exibir.'</div>';
						$cores = array_reverse($cores);
					else:
						echo '<div class="quadrado '.$cores[$num%2].'">'.$exibir.'</div>';
					endif;
				endforeach
			?>	
				
			
			<div style="clear: both;"></div>
		</div><!--box tabuleiro-->
	</body>
</html>
