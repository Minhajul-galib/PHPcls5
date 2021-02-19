<?php
    
    function areadeter($wid = null, $len = null , $type = 'r' ){
        
        if($type == 'r'){
            $area = $wid * $len;
            echo "Area = $area";
        }
        else if($type == 'c'){
            $area = 3.1415 * $wid * $wid;
            echo "Area = $area";
        }
        else if($type == 's'){
            $area = $wid * $wid;
            echo "Area = $area";
        }
        else{
            echo "Put the right value";
        }
    }  

    areadeter(20 , 30 , 's');
?> 