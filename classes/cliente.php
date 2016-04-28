<?php


class Cliente {
    
    public $dados;
    
    public function dados ($dados){
        echo    'Nome: '.$dados[0].'<br/>'.
                'CPF: '.$dados[1].'<br/>'.
                'Endere&ccedilo: '.$dados[2].'<br/>'.
                'Telefone: '.$dados[3];
    }
}