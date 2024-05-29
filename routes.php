<?php

use app\router\Router;

$router = new Router();
//API 
$router->add('GET', '/mangas', 'MangaController@retornar_todos_mangas', true);
$router->add('POST', '/mangas', 'MangaController@cadastrar_manga', true);
$router->add('GET', '/mangas/{id}', 'MangaController@retornar_manga_por_id', true);
$router->add('DELETE', '/mangas/{id}', 'MangaController@deletar_manga', true);
$router->add('PUT', '/mangas/{id}', 'MangaController@atualizar_manga', true);
// $router->add('POST', '/login', 'UsuarioController@login', true);

//TELAS
$router->add('GET', '/', 'MangaController@tela_home', false);
$router->add('GET', '/tela/mangas', 'MangaController@tela_mangas', false);
$router->add('GET', '/tela/login', 'UsuarioController@tela_login_usuario', false);
$router->add('GET', '/tela/cadastro', 'UsuarioController@tela_cadastro_usuario', false);

if (!$router->match($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'])) {
    echo '<h1>PAGE NOT FOUND</h1>';
    echo '<a href="/"> retornar para home</a>';
}