<?php
    
    function graus ($temp){
        $celsius = ($temp - 32 ) * (5/9);
        
        $msg = "A temperatura $tempº em fahrenheit, convertendo para celsius, é igual a: $celsius" . "º celsius\n";
        return $msg;
    }
    
    echo "Digite a temperatura em fahrenheit: \n";
    $temp = (int) fgets (STDIN);
    
    $status = graus ($temp);
    echo $status;
