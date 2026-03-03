<html>

    <head>
    <meta charset="utf-8">
    <title>Exc.1 - Formulário</title>
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
        max-width: 300px;
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
        <h2>INSTITUTO FEDERAL IFFar</h2>
    </header>
    
    <div class="container">

        <?php
        $FINAL = $_POST["final"];

        if ($FINAL <= 1.7) {
        echo "O aluno não pode realizar o exame.";
        }
        elseif ($FINAL >= 7.0) {
        echo "O aluno está aprovado.";
        }
        else {
        $NOTA = (50 - (6 * $FINAL)) / 4;
        echo "O aluno precisa tirar $NOTA no exame para ser aprovado.";
        }
        ?>
    </div>

    <footer>
        <p>© 2026 - T30 INFO</p>
    </footer>

    </body>
</html>