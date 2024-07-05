<?php

if ( isset($_POST['acao']) ){
    
 include_once '../Model/crud.php' ;   

$id_livro= $_POST['id_livro'];

$titulo= $_POST["titulo"];

$autor = $_POST["autor"];

$editora = $_POST["editora"];

$genero = $_POST["genero"];

$alterar = new crud();

$alterar->alterar_livro($id_livro, $titulo, $autor, $editora, $genero);
}      