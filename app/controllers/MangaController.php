<?php

namespace app\controllers;

use app\controllers\BaseController;
use app\DAO\MangaDAO;
use app\models\MangaModel;

class MangaController extends BaseController
{
    public function retornar_todos_mangas()
    {
        $mangaDAO = new MangaDAO($this->getConexao());
        return $mangaDAO->retornar_todos_mangas();
    }

    public function retornar_manga_por_id($id)
    {
        $mangaDAO = new MangaDAO($this->getConexao());
        return $mangaDAO->retornar_manga_por_id($id);
    }
    public function cadastrar_manga()
    {
        $body = json_decode(file_get_contents('php://input'), true);

        $manga = new MangaModel();
        $manga->setTitulo($body['title'] ?? null);
        $manga->setAutor($body['author'] ?? null);
        $manga->setGenero($body['genre'] ?? null);
        $manga->setAnoPublicacao($body['publication_year'] ?? null);
        $manga->setDescricao($body['description'] ?? null);
        $manga->setPreco($body['price'] ?? null);
        $manga->setQuantidadeEmEstoque($body['quantity_in_stock'] ?? null);
        $manga->setEditora($body['publisher'] ?? null);
        
        $mangaDAO = new MangaDAO($this->getConexao());
        return $mangaDAO->cadastrar_manga($manga);
        
    }
    public function atualizar_manga($id)
    {
        $body = json_decode(file_get_contents('php://input'), true);
        $manga = new MangaModel();
        $manga->setId($id);
        $manga->setTitulo($body['title'] ?? null);
        $manga->setAutor($body['author'] ?? null);
        $manga->setGenero($body['genre'] ?? null);
        $manga->setAnoPublicacao($body['publication_year'] ?? null);
        $manga->setDescricao($body['description'] ?? null);
        $manga->setPreco($body['price'] ?? null);
        $manga->setQuantidadeEmEstoque($body['quantity_in_stock'] ?? null);
        $manga->setEditora($body['publisher'] ?? null);
        
        $mangaDAO = new MangaDAO($this->getConexao());
        return $mangaDAO->atualizar_manga($id, $manga);
    }
    public function deletar_manga($id)
    {
        $mangaDAO = new MangaDAO($this->getConexao());
        return $mangaDAO->deletar_manga($id);
    }
    public function tela_home(){
        $this->renderizar_tela(('tela_home'));
    }
    public function tela_mangas(){
        $this->renderizar_tela(('tela_mangas'));
    }
}
