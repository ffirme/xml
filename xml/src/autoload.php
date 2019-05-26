<?php

function __autoload( $class )
{
	$class_src = WWW_ROOT . DS . 'src' . DS.  str_replace('\\',DS,$class) . '.php';

	if ( !file_exists($class_src) )
	{
		throw new Exception("Caminho do arquivo $class_src não encontrado.");
	}

	require_once( $class_src );
}
