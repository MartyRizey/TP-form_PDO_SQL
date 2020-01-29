<?php

function debug($variable){
    
    echo '<pre style="color: blue">'; 
    // echo '-----------------------------------------------------------------';
    // echo '<br><br>';
    print_r($variable); 
    // echo '<p style="color: blue">---------------------- Alors ça vous aide ? ---------------------</p>';
    echo '</pre>';

    // die('<p style="color: blue">------------------------------- Alors ça vous aide... --------------------------------</p>');
}
