<html>
<head>
    <title>Agenda de Contatos - T30</title>
</head>
<body>
    <h1>Agenda - Turma 30 - 2026</h1>
    <h2>Cadastrar contatos</h2>

    <form action="salvar.php" method="post">
    Nome: <input type="text" name="NOME"><br><br>
    Endereço: <input type="text" name="ENDERECO"><br><br>
    Telefone: <input type="text" name="TELEFONE"><br><br>
    <input type="submit" value="CADASTRAR">
    </form>

<?php 
include ('conexao.php');
$SQL = "SELECT * FROM CONTATOS";
$RESULTADO = mysqli_query($CONEXAO, $SQL);

if (mysqli_num_rows($RESULTADO) > 0){
    while ($LINHA = mysqli_fetch_assoc($RESULTADO)){
        echo $LINHA['nome'] . " | " . $LINHA['endereco'] . " | " . $LINHA['telefone'] . "<br>";
    }
} else {
    echo "<h3>Nenhum contato registrado.</h3>";
}
?>

</body>
</html>