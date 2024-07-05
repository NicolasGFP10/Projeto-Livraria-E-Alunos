<?php

require "conexao.php";

 session_start(); 

class crud {   
     
 function inserir_Usuario($nome,$telefone,$email,$ra,$rg,$senha){
     
    $conn= conectar();      
    
    $pegaRa = mysqli_query($conn, "SELECT * FROM usuario WHERE ra = '$ra'");	
	
    if(mysqli_num_rows($pegaRa) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('RA já existente');window.location.href='../../index.html';</script>";
	

   }else{

  $sql = "INSERT INTO usuario (nome,telefone,email,ra,rg,senha) values('$nome','$telefone','$email','$ra','$rg','$senha')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Aluno Cadastrado com sucesso');window.location.href='../View/html/frm_cadastrar.html';</script>";
   
   }
 }
   function selecionar_Usuario($ra,$senha){
       
        $conn= conectar();         
 
        $result_usuario = "SELECT * FROM usuario  WHERE ra= '$ra' && senha = '$senha' LIMIT 1";
        
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
       
        if(isset($resultado)){
		
            $_SESSION['usuarioRa'] = $resultado['ra'];            		
            $_SESSION['usuarioSenha'] = $resultado['senha'];

            header("Location: ../View/html/frm_perfil_usuario.php");           
   
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../../index.html';</script>";
         
        }
    

  }
  
  function selecionar_Admin($IDadm,$senha){
       
        $conn= conectar();         
 
        $result_admin = "SELECT * FROM admin  WHERE IDadm= '$IDadm' && senha = '$senha' LIMIT 1";
        
        $resultado_admin = mysqli_query($conn, $result_admin);
        
        $resultado = mysqli_fetch_assoc($resultado_admin);
        
       
        if(isset($resultado)){
		
            $_SESSION['adminIDadm'] = $resultado['IDadm'];            		
            $_SESSION['adminSenha'] = $resultado['senha'];

            header("Location: ../View/html/frm_perfil_adm.php");           
   
        }else{            
       
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou Senha incorretos');window.location.href='../View/html/frm_login_adm.html';</script>";
         
        }
    

  }
  
    public function excluir_Livro ($id_livro){

    $conn= conectar();   
    
    $id_do_livro= mysqli_query($conn, "SELECT * FROM livro WHERE id_livro = '$id_livro'");	
    
    if(mysqli_num_rows($id_do_livro) == 0){
              
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir');window.location.href='../View/html/excluir.php';</script>";
    }
           else{	
    
                  $result_livro = "DELETE FROM livro WHERE id_livro = '$id_livro'";
                  
                  mysqli_query($conn, $result_livro);
      
      if(mysqli_affected_rows($conn) != 0){
          
        echo"<script language='javascript' type='text/javascript'>alert('Livro excluído com sucesso');window.location.href='../View/html/excluir.php';</script>";
                     
              }else{
                  
                  header("Location:../view/html/excluir.php");
                   
                  
              }
    }
  
    
   }
    
    public function alterar_livro ($id_livro, $titulo, $autor, $editora, $genero){
        
        $conn= conectar(); 
    
  	$pegaId_livro = mysqli_query($conn, "SELECT * FROM livro WHERE id_livro = '$id_livro'");

        if(mysqli_num_rows($pegaId_livro) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este id do livro NÃO esta cadastrado em nossos registros, tente novamente');window.location.href='../View/html/atualizar.php'</script>";

	      }else{		

		
        $result_livro = "UPDATE livro SET titulo = '$titulo', autor = '$autor', editora = '$editora', genero = '$genero' WHERE id_livro = '$id_livro'";

        mysqli_query($conn,$result_livro);

            if(mysqli_affected_rows($conn) != 0){
                 
                echo "<script language='javascript' type='text/javascript'>alert('Campos alterados com sucesso');window.location.href='../View/html/atualizar.php'</script>";
                 
            }else{
                 
                echo "<script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar os campos, tente novamente');window.location.href='../View/html/atualizar.php'</script>";
                      
              }

        }
        
    }
    
    function inserir_Livro($id_livro,$titulo,$autor,$editora,$genero){
     
    $conn= conectar();      
    
    $pegaId_livro = mysqli_query($conn, "SELECT * FROM livro WHERE id_livro = '$id_livro'");	
	
    if(mysqli_num_rows($pegaId_livro) == 1){	
	

    echo"<script language='javascript' type='text/javascript'>alert('Id de livro já existente');window.location.href='../View/html/cadastrar.php';</script>";
	

   }else{

    $sql = "INSERT INTO livro (id_livro,titulo,autor,editora,genero) values('$id_livro','$titulo','$autor','$editora','$genero')";

    mysqli_query($conn,$sql);   
    
    echo"<script language='javascript' type='text/javascript'>alert('Livro Cadastrado com sucesso');window.location.href='../View/html/cadastrar.php';</script>";
   
   }
 }
   
    }
  

  


