<?php

session_start();
            
            
            $_SESSION['adminIDadm'] ;  
            $_SESSION['adminSenha'];

if(!isset($_SESSION["adminIDadm"]) || !isset($_SESSION["adminSenha"])){
    
		header("Location: frm_login_adm.html");
                
		exit;
		}else{
                    
                    
		
?>


<html>
    <head>
        <title>Escola | Adiministração</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../View/html/img/icone_legal.png"/>
        <link rel="stylesheet" type="text/css" href="../View/css/estilo.css">
    </head>
    <body>
        <div id="corpo3">
            <article id="barras">
                <a href="../View/html/frm_perfil_adm.php"><button id="opcoes"><h5>Inicio</h5></button></a>
                <a href="controller_consulta_conectados.php"><button id="opcoes2"><h5>Conectados</h5></button></a>
                <a href="controller_pesquisar_usuario.php"><button id="opcoes"><h5>Pesquisar</h5></button></a>
                <a href="../View/html/frm_cadastrar.php"><button id="opcoes"><h5>Cadastrar</h5></button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <form action="../View/html/sair.php">
                    <input type="submit" value="Deslogar" name="deslogar" id="opcoes">
                </form>
            </article>
            <article id="informacoes">
            <br>
            <h1>Alunos conectados</h1>
            <br>
            <hr>
            <br>
            <h3>
            <?php 
            include_once("../Model/conexao.php");
    
            $conn= conectar();  
    
            $conectados = "SELECT COUNT(ra) AS ra FROM usuario";
    
            $resultado_conectados = mysqli_query($conn, $conectados);
        
            while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
            ?>

            <?php echo("O número total de alunos conectados no site é "); echo $row_conectados['ra']; echo(" aluno(s).") ?>

            <?php }?>
            </h3>
            <br>
            <hr>
            <?php 
                include_once("../Model/conexao.php");
    
                $conn= conectar();  
    
                $conectados = "SELECT * FROM usuario ORDER BY nome";
    
                $resultado_conectados = mysqli_query($conn, $conectados);
        
                while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
            ?> 
            <?php 
                include_once("../Model/conexao.php");
    
                $conn= conectar();  
    

                $conectados = "SELECT * FROM usuario ORDER BY ra";
    
                $resultado_conectados = mysqli_query($conn, $conectados);
        
                while($row_conectados = mysqli_fetch_assoc($resultado_conectados)){ 
	
            ?>
                    
                    <table> 
                        <tr>
                            <br><h3><?php echo("- Nome: ");echo $row_conectados['nome']; echo (";")?></h3>
                            <h3><?php echo("- RA: ");echo $row_conectados['ra']; echo ("; ")?></h3>
                            <h3><?php echo("- Telefone: ");echo $row_conectados['telefone']; echo (";")?></h3>
                            <h3><?php echo("- E-mail: ");echo $row_conectados['email']; echo (";")?></h3>
                            <h3><?php echo("- RG: ");echo $row_conectados['rg']; echo (".")?></h3><br>
                        </tr>
                        <hr>
            <?php }?>
                    
                        
                    </table>
            <?php }?>
            <br> 
            </article>
        </div>
    </body>
</html>
<?php }

