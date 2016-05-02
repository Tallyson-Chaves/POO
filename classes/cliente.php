<?php

class Cliente {
    
    private $dados = array(
        array(  0=>"José",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"André",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"João",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Astolfo",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Roberto",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Thiago",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Pedro",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Joaquim",
                1=>"111.824.656-09",
                2=>"000.000.000-00",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Ronivaldo",
                1=>"111.824.656-09",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999"),
        array(  0=>"Cristineisson",
                1=>"000.000.000-00",
                2=>"Rua Principal",
                3=>"(31) 9 9999 - 9999")  
    );
    
    function getDados($id,$id2) {
        return $this->dados[$id][$id2];
    }


}