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
        <link rel="icon" type="image/jpg" href="img/icone_legal.png"/>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <div id="corpo3">
            <article id="barras">
                <a href="frm_perfil_adm.php"><button id="opcoes"><h5>Inicio</h5></button></a>
                <a href="../../Controller/controller_consulta_conectados.php"><button id="opcoes"><h5>Conectados</h5></button></a>
                <a href="../../Controller/controller_pesquisar_usuario.php""><button id="opcoes"><h5>Pesquisar</h5></button></a>
                <a href="frm_cadastrar.php"><button id="opcoes2"><h5>Cadastrar</h5></button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <form action="sair.php">
                <input type="submit" value="Deslogar" name="deslogar" id="opcoes">
            </article>
            <article id="informacoes">
            <br>
            <h1>Cadastrar Aluno</h1>
            <hr>
            <br>
            <form action="../../Controller/controller_cadastrar_usuario.php" method="POST">
                <h3><center>Digite o nome: <input id="caixatext" type="text" name="nome"><br></center></h3>
                <br>
                <h3><center>Digite o telefone: <input id="caixatext" type="int" name="telefone"><br></center></h3> 
                <br>
                <h3><center>Digite o e-mail: <input id="caixatext" type="email" name="email"><br></center></h3> 
                <br>
                <h3><center>Digite o RA: <input id="caixatext" type="number" name="ra"><br></center></h3>
                <br>
                <h3><center>Digite o RG: <input id="caixatext" type="number" name="rg"><br></center></h3> 
                <br>
                <h3><center>Digite a senha: <input id="caixatext" type="password" name="senha"><br></center></h3>
                <br>
                <center><input type="Submit" id="opcoes" value="Cadastrar" name="botao"> <input type="reset" id="opcoes" value="Limpar"></center>
            </form>
            <br>
            </article>
        </div>
    </body>
</html>
<?php }
