<?php

namespace app\models;

class MangaModel extends Model
{
    private $id;
    private $titulo;
    private $autor;
    private $genero;
    private $ano_publicacao;
    private $descricao;
    private $preco;
    private $quantidade_em_estoque;
    private $editora;

    public function __construct(
        $id = null,
        $titulo = null,
        $autor = null,
        $genero = null,
        $ano_publicacao = null,
        $descricao = null,
        $preco = null,
        $quantidade_em_estoque = null,
        $editora = null,
    ) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->ano_publicacao = $ano_publicacao;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade_em_estoque = $quantidade_em_estoque;
        $this->editora = $editora;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getAnoPublicacao()
    {
        return $this->ano_publicacao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getQuantidadeEmEstoque()
    {
        return $this->quantidade_em_estoque;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function setAnoPublicacao($ano_publicacao)
    {
        $this->ano_publicacao = $ano_publicacao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setQuantidadeEmEstoque($quantidade_em_estoque)
    {
        $this->quantidade_em_estoque = $quantidade_em_estoque;
    }

    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'genero' => $this->genero,
            'ano_publicacao' => $this->ano_publicacao,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'quantidade_em_estoque' => $this->quantidade_em_estoque,
            'editora' => $this->editora
        ];
    }
}
