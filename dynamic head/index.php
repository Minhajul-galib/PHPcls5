<?php

function headtitle($head , $tag = "h1" , $align = 'center' , $color = '#333333'){
    echo "<$tag style= 'text-align:$align; color:$color;'>Hello!! this is heading $head <hr></$tag>";
}
headtitle('H1' , 'h1' , 'center' , 'red' );
headtitle('H2' , 'h2' , 'left' , 'Blue' );
headtitle('H3' , 'h3' , 'right' , 'navy');
headtitle('H4' , 'h4' , 'center' , 'tomato');
headtitle('H5' , 'h5' , 'left' , 'Aqua');
headtitle('H6' , 'h6' , 'center' , 'lime');

?>