<?php
 
namespace App;

use src\Item;

class CarrinhoCompra{
    //atributos
    private $itens;

    //métodos
    public function __construct(){
        $this->itens = [];
    }

    public function getItens(){
        return $this->itens;
    }

    public function adicionarItem(item $item){
        array_push($item->item, $item);
        return true;
    }

    public function validarCarrinho(){
        return count($this->itens) > 0;
    }
}