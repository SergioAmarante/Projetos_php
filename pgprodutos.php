<?php require_once("connectbd.php"); ?>
<?php  include("header.php");   ?>


    <main>
        <?php  include("menu.php");   ?>
        <h1>
            <center>
                <p><b>TECH-SHOP Loja Virtual!</b></p>
            </center>
        </h1>
        <section id="produtos" class="container">
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

    <?php  include("footer.php");   ?>