<html>
<head>
    <title>Salvar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
include('conexao.php');

$NOME = $_POST['NOME'];
$ENDERECO = $_POST['ENDERECO'];
$TELEFONE = $_POST['TELEFONE'];

$SQL = "INSERT INTO contatos (nome, endereco, telefone)
            VALUES ('$NOME', '$ENDERECO', '$TELEFONE')";

if (mysqli_query($CONEXAO, $SQL)) {
    echo "<h2>Contato foi adicionado com sucesso!</h2>";
    echo "<a href='index.php'>VOLTAR</a>";
} else {
    echo "<h2>Erro ao adicionar o contato.</h2" . mysqli_error($CONEXAO);
    echo "<a href='index.php'>VOLTAR</a>";
}
?>