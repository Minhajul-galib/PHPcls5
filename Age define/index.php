<?php
function info($name , int $birth_year){

    $age = date('Y') - $birth_year;
    if($age >= 1 && $age <=5){
        echo "I am $name and I am $age years old. Baccha";
    }
    else if($age >=6 && $age <=15 ){
        echo "I am $name and I am $age years old. Chele";

    }
    else if($age >=16 && $age <=20){
        echo "I am $name and I am $age years old. Kishor";

    }
    else if($age >=21 && $age <=30){
        echo "I am $name and I am $age years old. Balok";

    }
    else if($age >=31 && $age <=50){
        echo "I am $name and I am $age years old. Jubok";

    }
    else {
        echo "I am $name and I am $age years old. Briddho";

    }


}

info('Habib' , '2000');
?>