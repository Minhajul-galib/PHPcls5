<?php

    function currency(int $us =NULL , $canada =NULL , $pound =NULL){
    
    $BDT = $us * 84.69;
    echo " TAKA for $us US Doller = $BDT &#2547; <hr>";
  
    $BDT = $canada * 66.84;
    echo " TAKA for $canada Canadian Doller = $BDT &#2547 <hr>";

    $BDT = $pound * 118.50;    
    echo " TAKA for $canada Pound = $BDT &#2547 <hr>";


}
currency(1 , 1 , 1);
?>