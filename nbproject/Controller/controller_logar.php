<?php  
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../Model/crud.php' ;   
 
$ra=filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$usuario = new crud();
$usuario->selecionar_Usuario($ra, $senha);
        
}      
   