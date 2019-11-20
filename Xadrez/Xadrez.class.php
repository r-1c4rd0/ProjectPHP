<?php 
	class Xadrez{
		public $tabuleiro = array();
		public $abc = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
		public $pecas = array(
			'brancas' => array(
				'torre_branco',
				'cavalo_branco',
				'bispo_branco',
				'rei_branco',
				'rainha_branco',
				'peao_branco'
			), 
			'pretas' => array(
				'torre_preto',
				'cavalo_preto',
				'bispo_preto',
				'rei_preto',
				'rainha_preto',
				'peao_preto'
			),
		);

		public function gerarTabuleiro(){
			$contar = count($this->abc);
			foreach ($this->abc as $indice => $valor) {
				for ($i=1; $i<=8 ; $i++) { 
					$this->tabuleiro[$valor.$i] = $valor.$i ;
				}
			}
			return true;

		}//termina o metodo gerar tabuleiro

		public function posicionarPecas(){
			for($i = 0; $i <= count($this->pecas['brancas'])-1; $i++){
				if($i == 0):
					$this->tabuleiro['a1'] = $this->pecas['brancas'][$i];
					$this->tabuleiro['h1'] = $this->pecas['brancas'][$i];
				elseif($i == 1):
					$this->tabuleiro['b1'] = $this->pecas['brancas'][$i];
					$this->tabuleiro['g1'] = $this->pecas['brancas'][$i];
				elseif($i == 2):
					$this->tabuleiro['c1'] = $this->pecas['brancas'][$i];
					$this->tabuleiro['f1'] = $this->pecas['brancas'][$i];
				elseif($i == 3):
					$this->tabuleiro['e1'] = $this->pecas['brancas'][$i];
				elseif($i == 4):	
					$this->tabuleiro['d1'] = $this->pecas['brancas'][$i];
				else:
					for($n = 0; $n <= count($this->abc)-1; $n++){
						$this->tabuleiro[$this->abc[$n].'2'] = $this->pecas['brancas'][$i];
					}
				endif;
			}// termina posicionamento brancas
			for($i = 0; $i <= count($this->pecas['pretas'])-1; $i++){
				if($i == 0):
					$this->tabuleiro['a8'] = $this->pecas['pretas'][$i];
					$this->tabuleiro['h8'] = $this->pecas['pretas'][$i];
				elseif($i == 1):
					$this->tabuleiro['b8'] = $this->pecas['pretas'][$i];
					$this->tabuleiro['g8'] = $this->pecas['pretas'][$i];
				elseif($i == 2):
					$this->tabuleiro['c8'] = $this->pecas['pretas'][$i];
					$this->tabuleiro['f8'] = $this->pecas['pretas'][$i];
				elseif($i == 3):
					$this->tabuleiro['e8'] = $this->pecas['pretas'][$i];
				elseif($i == 4):	
					$this->tabuleiro['d8'] = $this->pecas['pretas'][$i];
				else:
					for($n = 0; $n <= count($this->abc)-1; $n++){
						$this->tabuleiro[$this->abc[$n].'7'] = $this->pecas['pretas'][$i];
					}
				endif;
			}

		} // posicionamento inicial 

	}

?>