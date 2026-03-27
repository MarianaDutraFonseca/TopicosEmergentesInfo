<html>
<head>
    <title>Conexão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BANCO = "agenda_30";
$CONEXAO = mysqli_connect($SERVIDOR, $USUARIO, $SENHA, $BANCO);

if (!$CONEXAO){
    die ("Erro de conexão. ".mysqli_connect_error());
}
?>