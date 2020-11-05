<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>TECH-SHOP</title>

    <link rel="stylesheet" href="Css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <table>
        <?php 
        include("menu.php"); 
        ?>
    </table>
    <main>
        <H1>
            <center>
                <p><b> Quer ganhar um Blusão Tech-Shop?</b></p>
                <p><b> Preencha e concorra! </b></p>
                <img src="imagens/Blu1.png" width="300px" </center>
            </center>
        </H1>
        <center>

            <h1><b style="color: rgb(50, 0, 143);" Formulario de inscrição</b></h1>
            <form>
                <label for="pname">Nome completo:</label><br>

                <input type="text" id="pname" name="PrimeiroNomeDaPessoa"><br><br>


                <label for="number">Idade</label><br>

                <input type="number" id="Idade" name="Idade"><br><br>

                <label for="mail">E-mail:</label><br><br>

                <input type="email" id="mail"><br><br>


                <input type="submit">
            </form>

            <center>
    </main>

    <footer>
        <div>
            <h2 class="menu">
                <p> Formas de Pagamento</p>
            </h2>
            <img src="imagens/(33).jpg">
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<script src="Js/funcoes.Js"></script>
</html>