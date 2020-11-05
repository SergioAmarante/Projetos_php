<?php require_once("connectbd.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TECH-SHOP</title>
    <link rel="stylesheet" href="Css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <main>
        <?php  include("menu.php");   ?>
        <h1>
            <center>
                <p><b>TECH-SHOP Loja Virtual!</b></p>
            </center>
        </h1>
        <section id="produtos">
            <div class="tema">
                <h3><b>Categorias</b></h3>
                <ul class="tema">
                    <li onclick="exibir_categoria('produto')">Todos </li>
                    <li onclick="exibir_categoria('relogios')">Relogio</li>
                    <li onclick="exibir_categoria('fones')">Fones</li>
                    <li onclick="exibir_categoria('cameras')">Cameras</li>
                    <li onclick="exibir_categoria('celular')">Celulares</li>
                </ul>
            </div>
            <br>
            <div class="produtos"> 
                <?php 
                    $sql = "select * from produtos";
                    $result = $connect->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                ?>
                    <div class="produto <?php echo strtolower($row["categorias"]) ;?>" >
                        <img  src=" <?php echo $row ["imagem"];?>" />
                        <h1><?php echo $row["descricao"];?></h1>
                        <span class="valor">R$ <?php echo $row["valor"];?></span>
                        <span class="promo">R$ <?php echo $row["valor_final"];?></span>
                    </div>
                <?php
                        }
                    }
                    else
                    {
                        echo "Nenhum produto cadastrado!";
                    }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <h3 class="produtos">
                <p> Formas de Pagamento</p>
            </h3>
            <img src="imagens/(33).jpg">
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="Js/funcoes.Js"></script>
</body>
</html>