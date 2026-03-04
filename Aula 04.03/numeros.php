<html>

    <head>
    <meta charset="utf-8">
    <title>Exc.2 - Números</title>
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
        <h2>Exc.2 - Números</h2>
    </header>
    
    <div class="container">

    <?php
    echo "Primeira lista: ";
    $N = ["08","16","21","23","55"];
    foreach ($N as $Numeros) {
    echo "$Numeros, ";
    }

    echo "<br><br>Segunda lista: ";
    unset($N[2]);
    foreach ($N as $Numeros) {
    echo "$Numeros, ";
    }
    ?>
    </div>

    <footer>
        <p>© 2026 - T30 INFO</p>
    </footer>

    </body>
</html>