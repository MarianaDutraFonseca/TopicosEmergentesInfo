<html>
<head>
    <title>Excluir</title>
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

    $ID = $_GET['id'];
    $SQL = "DELETE FROM contatos WHERE id=$ID";

    if (mysqli_query($CONEXAO, $SQL)){
        echo "<div class='sucesso'>O contato foi excluido com sucesso!</div>";
        echo "<a href='index.php' class='voltar'>VOLTAR</a>";
        exit;
    } else {
        echo "<div class='erro'>Erro ao excluir o contato.</div>" .mysqli_error($CONEXAO);
        echo "<a href='index.php' class='voltar'>VOLTAR</a>";
    }
    ?>
    </div><br><br>
<footer>© 2026 IFFar - Todos os direitos reservados.</footer>
</body>
</html>