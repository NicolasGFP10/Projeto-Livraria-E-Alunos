<?php
session_start();
            
            $_SESSION['usuarioRa'] ;  
            $_SESSION['usuarioSenha'];

if(!isset($_SESSION["usuarioRa"]) || !isset($_SESSION["usuarioSenha"])){
    
		header("Location: ../View/html/frm_logar.html");
                
		exit;
		}else{
		
?>
<html>
    <head>
        <title>Escola | Consultar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../View/html/img/icone_legal.png"/>
        <link rel="stylesheet" type="text/css" href="../View/css/estilo.css">
    </head>
    <body>
        <div id="corpo3">
            <article id="barras">
                <a href="../View/html/frm_perfil_usuario.php"><button id="opcoes"><h5>Inicio</h5></button></a>
                <a href="../View/html/cadastrar.php"><button id="opcoes"><h5>Cadastrar</h5></button></a>
                <a href="../View/html/atualizar.php"><button id="opcoes"><h5>Alterar</h5></button></a>
                <a href="controller_consultar.php"><button id="opcoes2"><h5>Consultar</h5></button></a>
                <a href="../View/html/excluir.php"><button id="opcoes"><h5>Excluir</h5></button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <form action="../View/html/sair.php">
                <input type="submit" value="Deslogar" name="deslogar" id="opcoes">
                </form>
            </article>
            <article id="informacoes">
                    <br>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <br>
                    <h1>Atributos do livro</h1>
                    <br>
                    <hr>
                    <?php 
                        include_once("../Model/conexao.php");
                        $conn= conectar();  
                        $livro = "SELECT * FROM livro ORDER BY id_livro";
                        $informacoes = mysqli_query($conn, $livro);        
                        while($row_livro = mysqli_fetch_assoc($informacoes)){ 
                    ?>
                    <br>   
                    <h3>ID: <?php echo $row_livro['id_livro'];?>;</h3>
                    <br>
                    <h3>Título: <?php echo $row_livro['titulo'];?>;</h3>
                    <br>
                    <h3>Autor: <?php echo $row_livro['autor'];?>;</h3>
                    <br>
                    <h3>Editora: <?php echo $row_livro['editora'];?>;</h3>
                    <br>
                    <h3>Gênero: <?php echo $row_livro['genero'];?>.</h3>
                    <?php }?>
                    <br>
                    <hr>
            </article>
        </div>
    </body>
</html>
<?php }
