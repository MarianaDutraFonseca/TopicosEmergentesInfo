<html>
<head>
    <title>Agenda de Contatos - T30</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header><a href="https://www.iffarroupilha.edu.br/" target="_blank"><img src="iff.png" class="iff"></a></header>

    <div class="inicio">
    <div class="container mt-5">
        <div class="text-center">
            <h1>Turma 30 INFO 2026</h1>
            <p>Agenda - Setor de Contatos</p>
        </div>
    </div></div>

    <div class="tudo">
    <div class="formulario">
    <div class="container mt-5">
            <form action="salvar.php" method="post">
                <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="NOME">

                <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" name="ENDERECO"><br>

                <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="TELEFONE">
                    <input type="submit" class="btn-light" value="CADASTRAR">
            </form>
    </div></div>

    <div class="php">
        <div class="container mt-5">
        <?php 
        include ('conexao.php');
        $SQL = "SELECT * FROM CONTATOS";
        $RESULTADO = mysqli_query($CONEXAO, $SQL);

        if (mysqli_num_rows($RESULTADO) > 0){
            while ($LINHA = mysqli_fetch_assoc($RESULTADO)){
                echo $LINHA['nome'] . " | " . $LINHA['endereco'] . " | " 
                . $LINHA['telefone'] . " | <a href='editar.php?id=" 
                . $LINHA['id'] . "'>Editar</a> | <a href='excluir.php?id='>Excluir</a>" . "<br>";
            }
        } else {
            echo "<h3>Nenhum contato registrado.</h3>";
        }
        ?>
    </div></div></div>

<footer>© 2026 IFFar - Todos os direitos reservados.</footer>
</body>
</html>