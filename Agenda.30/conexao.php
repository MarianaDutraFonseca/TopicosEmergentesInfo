<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BANCO = "agenda_30";
$CONEXAO = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BANCO);

if (!$CONEXAO){
    die ("Erro de conexão. ".mysqli_connect_errno());
}
?>