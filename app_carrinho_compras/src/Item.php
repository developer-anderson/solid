<?php
namespace App;
class Item
{
    private $descricao;
    private $valor;

    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor(float $valor)
    {
        return $this->valor = $valor;
    }

    public function setDescricao(string $descricao)
    {
        return $this->descricao = $descricao;
    }
    
}