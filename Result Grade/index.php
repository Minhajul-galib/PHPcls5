<?php
function resultInfo($name =null, int $number =null, $grade =null){

    if($number >=1 && $number <=40){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is F";
    }
    else if($number >=41 && $number <=50){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is D";

    }
    else if($number >=51 && $number <= 60){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is C";
    }
    else if($number >=61 && $number <=70){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is B";

    }
    else if($number >=71 && $number <=80){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is A";

    }
    else if($number >=81 && $number <=100){
        echo "Your name is $name <hr> You got $number . <hr> Your grade is Golden";

    }
    else {
        echo "Put the right value";
    }
}
resultInfo('Habib' , 80 , 'A');
?>