<?php

require __DIR__."/vendor/autoload.php";

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

$carrinho1 = new CarrinhoCompra();

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();
//----------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copos');
$item1->setValor(4.55);

$item2->setDescricao('Lampada');
$item2->setValor(8.32);

//----------------------

echo '<h4>Pedido iniciado</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

//----------------------


// $pedido->getCarrinhoCompra()->adicionarItem($item1);
// $pedido->getCarrinhoCompra()->adicionarItem($item2);

//----------------------

// echo '<h4>Pedido com itens</h4>';
// echo '<pre>';
// print_r($pedido);
// echo '</pre>';

//----------------------

echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

