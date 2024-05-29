<?php

namespace app\DAO;

use app\models\MangaModel;

class MangaDAO
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function retornar_todos_mangas()
    {
        $list = array();
        $query = "SELECT * FROM manga";
        $result = $this->db->prepare($query);
        $result->execute();

        if ($result->rowCount() > 0) {
            foreach ($result->fetchAll(\PDO::FETCH_OBJ) as $key => $obResult) {
                $obj = new MangaModel();
                $obj->setId($obResult->id);
                $obj->setTitulo($obResult->titulo);
                $obj->setAutor($obResult->autor);
                $obj->setGenero($obResult->genero);
                $obj->setAnoPublicacao($obResult->ano_publicacao);
                $obj->setDescricao($obResult->descricao);
                $obj->setPreco($obResult->preco);
                $obj->setQuantidadeEmEstoque($obResult->quantidade_em_estoque);
                $obj->setEditora($obResult->editora);
                array_push($list,  $obj->toArray());
            }
        }
        return $list;
    }

    public function retornar_manga_por_id($id)
    {
        $query = "SELECT * FROM manga WHERE id = :id";
        $result = $this->db->prepare($query);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        $result->execute();
        $obj = '';
        if ($result->rowCount() > 0) {
            foreach ($result->fetchAll(\PDO::FETCH_OBJ) as $key => $obResult) {
                $obj = new MangaModel();
                $obj->setId($obResult->id);
                $obj->setTitulo($obResult->titulo);
                $obj->setAutor($obResult->autor);
                $obj->setGenero($obResult->genero);
                $obj->setAnoPublicacao($obResult->ano_publicacao);
                $obj->setDescricao($obResult->descricao);
                $obj->setPreco($obResult->preco);
                $obj->setQuantidadeEmEstoque($obResult->quantidade_em_estoque);
                $obj->setEditora($obResult->editora);
                $obj = $obj->toArray();
            }
        }
        return $obj;
    }
    public function cadastrar_manga($manga)
    {
        $query = "INSERT INTO manga 
          (titulo, autor, genero, ano_publicacao, descricao, preco, quantidade_em_estoque, editora) 
          VALUES 
          (:titulo, :autor, :genero, :ano_publicacao, :descricao, :preco, :quantidade_em_estoque, :editora)";
        $result = $this->db->prepare($query);
        $params = [
            ':titulo' => $manga->getTitulo(),
            ':autor' => $manga->getAutor(),
            ':genero' => $manga->getGenero(),
            ':ano_publicacao' => $manga->getAnoPublicacao(),
            ':descricao' => $manga->getDescricao(),
            ':preco' => $manga->getPreco(),
            ':quantidade_em_estoque' => $manga->getQuantidadeEmEstoque(),
            ':editora' => $manga->getEditora(),
        ];
        $result->execute($params);
        $manga->setId($this->db->lastInsertId());
        return $manga;
    }
    public function atualizar_manga($id, $manga)
    {
        $query = "UPDATE manga SET 
                  titulo = :titulo, 
                  autor = :autor, 
                  genero = :genero, 
                  ano_publicacao = :ano_publicacao, 
                  descricao = :descricao, 
                  preco = :preco, 
                  quantidade_em_estoque = :quantidade_em_estoque, 
                  editora = :editora
                  WHERE id = :id";
        
        $result = $this->db->prepare($query);
        $params = [
            ':id' => $id,
            ':titulo' => $manga->getTitulo(),
            ':autor' => $manga->getAutor(),
            ':genero' => $manga->getGenero(),
            ':ano_publicacao' => $manga->getAnoPublicacao(),
            ':descricao' => $manga->getDescricao(),
            ':preco' => $manga->getPreco(),
            ':quantidade_em_estoque' => $manga->getQuantidadeEmEstoque(),
            ':editora' => $manga->getEditora(),
        ];
        $result->execute($params);
        return $manga;
    }
    
    public function deletar_manga($id)
    {
        $query = "DELETE FROM manga WHERE id = :id";
        $result = $this->db->prepare($query);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        $result->execute();
        return $result->rowCount() > 0;
    }
    
}
