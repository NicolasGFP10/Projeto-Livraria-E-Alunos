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
        <title>Escola | Pesquisar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="../View/html/img/icone_legal.png"/>
        <link rel="stylesheet" type="text/css" href="../View/css/estilo.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js%22%3E"></script>
    </head>
    <body>
        <div id="corpo3">
            <article id="barras">
                <a href="../View/html/frm_perfil_adm.php"><button id="opcoes"><h5>Inicio</h5></button></a>
                <a href="controller_consulta_conectados.php"><button id="opcoes"><h5>Conectados</h5></button></a>
                <a href="controller_pesquisar_usuario.php"><button id="opcoes2"><h5>Pesquisar</h5></button></a>
                <a href="../View/html/frm_cadastrar.php"><button id="opcoes"><h5>Cadastrar</h5></button></a>
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <form action="../View/html/sair.php">
                    <input type="submit" value="Deslogar" name="deslogar" id="opcoes">
                </form>
            </article>
            <article id="informacoes">
                <br>
                <h1>Pesquisar aluno</h1>
                <br>
                <hr>
                <br>
                <div id="pesquisa">
                <form method="POST">
                    <input id="pesquisa" id="caixatext" type="text" name="pesquisa" placeholder="Insira uma informação">
                    <br><br>
                    <center><input type="Submit" id="opcoes" value="Pesquisar" name="botao"></center>
                </form>
                <?php

                    $botao=filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);

                    if(isset($botao)){   

                    $conn  = mysqli_connect('localhost','root','','escola');

                    $busca = $_POST['pesquisa'];

                    $usuario = "SELECT * FROM usuario GROUP BY nome";

                    $query = mysqli_query($conn, "SELECT * FROM usuario WHERE nome LIKE '%$busca%' OR telefone LIKE '%$busca%' OR email LIKE '%$busca%' OR ra LIKE '%$busca%' OR rg LIKE '%$busca%'");
                    $num   = mysqli_num_rows($query);
                    
                    if($num > 0){

                        while($row = mysqli_fetch_assoc($query) AND $usuario){
                        
                            ?> 
                            <br><h3><?php echo("- Nome: ");echo $row['nome']; echo (";")?></h3>
                            <h3><?php echo("- RA: ");echo $row['ra']; echo ("; ")?></h3>
                            <h3><?php echo("- Telefone: ");echo $row['telefone']; echo (";")?></h3>
                            <h3><?php echo("- E-mail: ");echo $row['email']; echo (";")?></h3>
                            <h3><?php echo("- RG: ");echo $row['rg']; echo (".")?></h3><br>

                            <?php
                        }

                    }else{
                        ?> <br><h3>Nada foi encontrado referente ao aluno</h3>
                        <?php
                    }
                ?>
                </div>
                <br>
            </article>
        </div>
    </body>
</html>
<?php }}
