<?php  
 $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);    
 
if(isset($botao)){   
    
    
 include_once '../Model/crud.php' ;   
 
$IDadm=filter_input(INPUT_POST, 'IDadm', FILTER_SANITIZE_STRING);
$senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$admin = new crud();
$admin->selecionar_Admin($IDadm, $senha);
        
}    