<?php
$acao=filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

if(isset($acao)){   
    
    include_once '../Model/crud.php';
    
    $id_livro= filter_input(INPUT_POST, 'id_livro', FILTER_SANITIZE_STRING);
    
    $titulo=filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    
    $autor=filter_input(INPUT_POST, 'autor', FILTER_SANITIZE_STRING);
    
    $editora=filter_input(INPUT_POST, 'editora', FILTER_SANITIZE_STRING);
    
    $genero=filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
    
    if((!$id_livro) || (!$titulo) || (!$autor) || (!$editora) || (!$genero)){
        
         echo"<script language='javascript' type='text/javascript'>alert('Preencha todos os campos');window.location.href='../View/html/frm_cadastrar_livro.php';</script>";
         
    }else{
        
    $livro = new crud();
    
    $livro->inserir_Livro($id_livro,$titulo,$autor,$editora,$genero);
    
}

}