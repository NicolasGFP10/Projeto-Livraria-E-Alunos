<?php  
      
if (isset($_POST['acao']) ){
    
include_once '../Model/crud.php';   

$id_livro= $_POST['id_livro'];

$excluir = new crud();

$excluir->excluir_Livro($id_livro);
}      