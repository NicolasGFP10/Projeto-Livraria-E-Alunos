<?php

    function conectar(){

    $conn = mysqli_connect('localhost', 'root', '', 'escola');
    
	if(!$conn){
            
		return "Conexão não abre !" ;
                
	}else{
            
		return $conn ;
                
    }
    
}
