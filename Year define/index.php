<?php

function yearDef($name , $birthyear){
    
    $year = date('Y') - $birthyear;
    echo "My name is $name.<hr>I am $year years old.";
}

yearDef('Habib' , 2000);
?>