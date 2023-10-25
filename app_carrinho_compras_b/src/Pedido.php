<?php
 
namespace App;

use src\CarrinhoCompra;

class Pedido{
    private $status; 
    private $carrinhoCompra; 
    private $valorPedido; 

    public function ___construct(){
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra(){
        return $this->carrinhoCompra;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(string $status){
        return $this->status;
    }

    public function confirmar(){
        if($this->carrinhoCompra->validarCarrinho){
            $this->setStatus('Confirmado');
            return true; 
        }
        
        return false; 
    }
};

