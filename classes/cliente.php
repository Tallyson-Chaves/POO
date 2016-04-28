<?php
require_once 'database/dados.php';

class Cliente {
    
    public $dados;
    
    public function dados ($dados){
        $i=0;
        
        while($i <= 9){
        echo    
                '-----------------------------------------------------'.'<br/>'.
                'ID: '.'000'.$i.'<br/>'.
                'Nome: '.$dados[$i][0].'<br/>'.
                'CPF: '.$dados[$i][1].'<br/>'.
                'Endere&ccedilo: '.$dados[$i][2].'<br/>'.
                'Telefone: '.$dados[$i][3].'<br/>'.
                '-----------------------------------------------------'.'<br/>';
                $i++;
        }
        
    }
    
    
}