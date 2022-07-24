<?php
require __DIR__."/vendor/autoload.php";
use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo("Com SRP");
$carrinho_one = new CarrinhoCompra();
$pedido = new Pedido();
$item1 = new Item();
$item1->setDescricao("Copo");
$item1->setValor(4.55);
$item2 = new Item();
$item2->setDescricao("PRato");
$item2->setValor(6.55);

echo("<pre>");
print_r($pedido->getCarrinhoCompra()->adicionarItem($item1));
print_r($pedido->getCarrinhoCompra()->adicionarItem($item2));
echo("</pre>");


echo("<pre>");


echo("</pre>");