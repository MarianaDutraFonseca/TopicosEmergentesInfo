<html>
<head>
    <title>Agenda de Contatos - T30</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<header><a href="https://www.iffarroupilha.edu.br/" target="_blank"><img src="iff.png" class="iff"></a></header>

    <div class="inicio">
    <div>
        <div class="text-center">
            <h1>Turma 30 INFO 2026</h1>
            <p>Agenda - Setor de Contatos</p>
        </div>
    </div></div>

    <div class="tudo">
    <div class="formulario">
    <div>
            <form action="salvar.php" method="post">
                <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="NOME">

                <label for="endereco" class="form-label">Endereço:</label>
                    <input type="text" class="form-control" name="ENDERECO"><br>

                <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" class="form-control" name="TELEFONE" maxlength="15" onkeyup="mascaraTelefone(this)"><br>
                    <input type="submit" class="btn-light" value="CADASTRAR">
            </form>
    </div></div>

    <div class="php">
        <div>
        <?php 
        include ('conexao.php');
        $SQL = "SELECT * FROM CONTATOS";
        $RESULTADO = mysqli_query($CONEXAO, $SQL);

        if (mysqli_num_rows($RESULTADO) > 0){
            while ($LINHA = mysqli_fetch_assoc($RESULTADO)){
                echo $LINHA['nome'] . " | " . 
                $LINHA['endereco'] . " | " . 
                $LINHA['telefone'] . " | 

                <a href='editar.php?id=" . $LINHA['id'] . "'>
                <img src='editar.png' width='20'></a> 

                <a href='excluir.php?id=" . $LINHA['id'] . "'
                onclick='return confirm(\"Você quer realmente excluir o contato?\");'>
                <img src='excluir.png' width='20'></a><br>";
            }
        } else {
            echo "<h3>Nenhum contato registrado.</h3>";
        }
        ?>
    </div></div></div><br><br>

<script>
function mascaraTelefone(campo){
    let valor = campo.value.replace(/\D/g, "");

    if(valor.length > 10){
        valor = valor.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
    }else{
        valor = valor.replace(/^(\d{2})(\d{4})(\d{4}).*/, "($1) $2-$3");
    }
    campo.value = valor;
}
</script>

<footer>© 2026 IFFar - Todos os direitos reservados.</footer>
</body>
</html>