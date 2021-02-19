<?php

function borohat($txt){

    echo "<span style='text-transform:uppercase;'> $txt </span>";
}

function chotohat($txt){
    echo "<span style='text-transform:lowercase;'> $txt </span>";

}

function capitalizehat($txt){
    echo "<span style='text-transform:capitalize;'> $txt </span>";

}
borohat( 'This is borohat <hr>');
chotohat( 'This is chotohat <hr>');
capitalizehat( 'This is capitalize <hr>');

?>