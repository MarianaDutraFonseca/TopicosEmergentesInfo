<html>
<head>
    <title>Editar</title>
    <link rel="stylesheet" href="style2.css">
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
$id = $_GET['id'];

$SQL = "SELECT * FROM contatos WHERE id = $id";
$RESULTADO = mysqli_query($CONEXAO, $SQL);
if (mysqli_num_rows($RESULTADO) == 1){
    $CONTATO = mysqli_fetch_assoc($RESULTADO);
} else {
    echo "Contato não encontrado a base.";
    exit;
}

if (isset($_POST['Atualizar'])){
    $NOVO_NOME = $_POST['Nome'];
    $NOVO_ENDERECO = $_POST['Endereco'];
    $NOVO_TELEFONE = $_POST['Telefone'];

    $SQL2 = "UPDATE contatos SET nome = '$NOVO_NOME',
        endereco = '$NOVO_ENDERECO', telefone = '$NOVO_TELEFONE'
        WHERE id = $id";

    if (mysqli_query($CONEXAO, $SQL2)){
        echo "<div class='sucesso'>Contato atualizado com sucesso!</div>";
        echo "<a href='index.php' class='voltar'>VOLTAR</a>";
        exit;
    } else {
        echo "<div class='erro'>Erro ao atualizar.</div>" . mysqli_error($CONEXAO);
        echo "<a href='index.php' class='voltar'>VOLTAR</a>";
        exit; 
    }
}
?></div>

    <div class="formulario">
        <form method="post">
        <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="Nome" value="<?php echo $CONTATO['nome']; ?>">

        <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" name="Endereco" value="<?php echo $CONTATO['endereco']; ?>"><br>

        <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control" name="Telefone" maxlength="15" onkeyup= "mascara(this)" value="<?php echo $CONTATO['telefone']; ?>"><br>
            <input type="submit" class="btn-light" name="Atualizar" value="ATUALIZAR">
        </form>
    </div><br><br>

<script>
function mascara(campo){
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