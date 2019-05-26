<?php

$rotas[] = ['/','HomerController@index'];
$rotas[] = ['/login','LoginController@index'];
$rotas[] = ['/posts','PostsController@index'];
$rotas[] = ['/post/{}/editar','LoginController@editar'];

return $rotas;
