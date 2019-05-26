<?php

class Roteador
{
	private $_uri;
	private $_rotas;
	private $_controllers;

	public function __construct(array $rotas)
	{
		$this->_rotas = $rotas;
		$this->rodar();
	}

	private function pegar_uri()
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

	private function tratar_uri()
	{
		$uri = $this->pegar_uri();
		$uri_r = explode('/',$uri);
		foreach($uri_r as $k_uri => $v_uri)
		{
			$u[] = '/'.$v_uri;
		}
		return $u;
	}

	private function pegar_rotas()
	{
		return $this->_rotas;
	}

	/*
	private function pegar_rotas_uri()
	{
		$rotas = $this->pegar_rotas();
		foreach($rotas as $k => $v)
		{
			$r[] = $v[0];
		}
		return $r;
	}
	 */

	private function tratar_rotas()
	{
		$rotas = $this->pegar_rotas();
                foreach($rotas as $k_rotas => $v_rotas)
		{
			$rota = $v_rotas[0];
			$r[] = explode('@',$v_rotas[1]);
		}
		for($i=0;$i<count($r);$i++)
		{
			$rt = $r[$i];
		}
		
		//print_r($r);
                return $rota;
	}

	private function validar_rota()
	{
		$uri  = $this->tratar_uri();
		$rota = $this->tratar_rotas();
		//print_r($uri[1]);
		echo "\n";
		//print_r($rota[1]);
		/*if()
		{
			
		}*/
	}

	private function rodar()
	{
		echo '<pre>';
		//print_r($this->tratar_uri());
		print_r($this->tratar_rotas());
		echo '<hr>';
		//print_r($this->validar_rota());
	}
}
