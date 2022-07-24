<?php

namespace App;
use App\Item;
class CarrinhoCompra
{
    private $itens;
    private $status;
    private $valorTotal;

    public function __construct()
    {
        $this->itens      = [];
        $this->status     = 'aberto';
        $this->valorTotal = 0;
    }

    public function getItens()
    {
        return $this->itens;
    }
    public function adicionarItem(Item $item)
    {
       
        array_push($this->itens, $item);
        return true;
    }
    public function exibirItens()
    {
        return $this->itens;
    }
    public function validarCarrinho()
    {
        return count($this->itens) > 0;
    }





}
