    
<? php
    função  graus ( $ temp ) {
        $ Celsius  = ( $ temperatura  -  32 ) * ( 5 / 9 );
        $ msg  =  " a temperatura $ temp "  .  " º "  .  " está em fahrenheit, convertendo para celsius, é igual a: $ celsius "  .  " º celsius \ n " ;
        return  $ msg ;
    }
    
    echo  " Digite a temperatura em fahrenheit: \ n " ;
    $ temp  = ( int ) fgets ( STDIN );
    
    $ status  = graus ( $ temp );
    echo  $ status ;
