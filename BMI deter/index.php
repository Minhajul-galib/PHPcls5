<?php
function info($name , int $mass =NULL , int $height =NULL){
    $bmi = $mass / ($height * $height);     
    echo "Your BMI is = $bmi";
}
info('Habib' , 8 , 4);
?>