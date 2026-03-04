<html>

    <head>
    <meta charset="utf-8">
    <title>Exc.4 - Alunos</title>
        <style>
        body{
        background-color: #13273f;
        font-family: 'Times New Roman', Times, serif;
        color: snow;
        display: flex;
        flex-direction: column;
        margin: 0;
        min-height: 100vh;
        }
        header{
        background-color: #4E0000;
        color: snow;
        padding: 30px 20px;
        text-align: center;
        }
        .container{
        padding: 10px;
        margin: auto;
        max-width: 400px;
        text-align: center;
        border-radius: 10px;
        }
        .gradient-btn{
        background: linear-gradient(45deg, #4E0000, #13273f);
        color: snow;
        padding: 10px 20px;
        }
        footer{
        background-color: #4E0000;
        color: snow;
        padding: 20px;
        text-align: center;
        position: sticky;
        bottom: 0;
        width: 100%;
        }
        </style>
    </head>

    <body>
    <header>
        <h2>Exc.4 - Alunos</h2>
    </header>
    
    <div class="container">

    <?php
    $ALUNOS = [
    ["Nome" => "Max","Nota" => 10],
    ["Nome" => "Charles","Nota" => 9],
    ["Nome" => "Carlos","Nota" => 8],
    ];

    echo "<h2>Melhores alunos do semestre:</h2>";
    foreach($ALUNOS as $ALUNO){
    echo "Nome: $ALUNO[Nome].<br>";
    echo "Nota: $ALUNO[Nota].<br></br>";
    }

    $NOTAS = 0;
    foreach($ALUNOS as $ALUNO){
    $NOTAS += $ALUNO ["Nota"];
    }
        $MEDIA = $NOTAS /count($ALUNOS);
        echo "Média: $MEDIA.<br></br>";

    $NOTA = 0;
    $ESTUDANTE = "";
    foreach($ALUNOS as $ALUNO){
        if ($ALUNO ["Nota"] > $NOTA){
        $NOTA = $ALUNO ["Nota"];
        $ESTUDANTE = $ALUNO ["Nome"];
        }
    }
        echo "Melhor aluno: $ESTUDANTE com nota $NOTA.";
    ?>
    </div>

    <footer>
        <p>© 2026 - T30 INFO</p>
    </footer>

    </body>
</html>