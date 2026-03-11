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
        echo "<h2>Contato atualizado com sucesso!</h2>";
        echo "<a href='index.php'>VOLTAR</a>";
        exit;
    } else {
        echo "<h2>Erro ao atualizar." . mysqli_error($CONEXAO);
        echo "<a href='index.php'>VOLTAR</a>";
        exit; 
    }
}

?>

<form method="POST">
    Nome: <input type="text" name="Nome" value="<?php echo $CONTATO['nome']; ?>"><br><br>
    Endereço: <input type="text" name="Endereco" value="<?php echo $CONTATO['endereco']; ?>"><br><br>
    Telefone: <input type="text" name="Telefone" value="<?php echo $CONTATO['telefone']; ?>"><br><br>

    <input type="submit" name="Atualizar" value="Atualizar">
</form>