<?php
$botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

if(isset($botao)){   
    
    include_once '../Model/crud.php';
    
 
    // filter_input — Obtem a específica variável externa pelo nome e opcionalmente a filtra.
    //Remova todos os caracteres, exceto letras, dígitos e !#$%&'*+-=?^_`{|}~@.[].
    
    $nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    
    $telefone=filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    
    $email=filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    
    $ra=filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
    
    $rg=filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
    
    $senha=filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
    if((!$nome) || (!$telefone) || (!$email) || (!$ra) || (!$rg) || (!$senha)){
        
         echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos');window.location.href='../View/html/frm_cadastrar.php';</script>";
         
    }else{
        
    $usuario = new crud();
    
    $usuario->inserir_Usuario($nome,$telefone,$email,$ra,$rg,$senha);
    
}

}


    
    
    
    

