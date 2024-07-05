<?php
session_start();
            
            $_SESSION['usuarioRa'] ;  
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioRa"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: frm_logar.html");
                
		exit;
		}else{
		
?>
<html>
    <head>
        <title>Escola | Atualizar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="img/icone_legal.png"/>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <div id="corpo3">
            <article id="barras">
                <a href="frm_perfil_usuario.php"><button id="opcoes"><h5>Inicio</h5></button></a>
                <a href="cadastrar.php"><button id="opcoes"><h5>Cadastrar</h5></button></a>
                <a href="atualizar.php"><button id="opcoes2"><h5>Alterar</h5></button></a>
                <a href="../../Controller/controller_consultar.php"><button id="opcoes"><h5>Consultar</h5></button></a>
                <a href="excluir.php"><button id="opcoes"><h5>Excluir</h5></button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <form action="sair.php">
                <input type="submit" value="Deslogar" name="deslogar" id="opcoes">
                </form>
                </article>
            <article id="informacoes">
            <br>
            <h1>Alterar livro</h1>
            <br>
            <hr>
            <br>
            <h3>Para Alterar o seu livro, preencha os campos abaixo.</h3>
            <br>
            <form class="formulario" method="POST" action="../../Controller/controller_alterar.php">
                <h3>Id do livro: <input id="caixatext" type="nunber" name="id_livro"></h3><br>
                <h3>Novo título: <input id="caixatext" type="text" name="titulo"> </h3><br>
                <h3>Novo autor: <input id="caixatext" type="text" name="autor"></h3><br>
                <h3>Nova editora: <input id="caixatext" type="text" name="editora"></h3><br>
                <h3>Novo gênero: <input id="caixatext" type="text" name="genero"></h3><br>
                <center><input type="submit" name="acao" value="Alterar" id="opcoes"></center>
            </form>
            </article>
        </div>
    </body>
</html>
<?php }