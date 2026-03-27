<html>
<head>
    <title>Salvar</title>
    <link rel="stylesheet" href="style3.css">
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

<div class="AH">
<?php
include('conexao.php');

$NOME = $_POST['NOME'];
$ENDERECO = $_POST['ENDERECO'];
$TELEFONE = $_POST['TELEFONE'];

$SQL = "INSERT INTO contatos (nome, endereco, telefone)
            VALUES ('$NOME', '$ENDERECO', '$TELEFONE')";

if (mysqli_query($CONEXAO, $SQL)) {
    echo "<div class='sucesso'>Contato foi adicionado com sucesso!</div>";
    echo "<a href='index.php' class='voltar'>VOLTAR</a>";
    exit;
} else {        
    echo "<div class='erro'>Erro ao adicionar o contato.</div>";
    echo "<a href='index.php' class='voltar'>VOLTAR</a>";
    exit;
}
?></div><br><br>
<footer>© 2026 IFFar - Todos os direitos reservados.</footer>
</body>
</html>