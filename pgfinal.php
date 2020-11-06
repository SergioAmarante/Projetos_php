<?php include("header.php"); ?>
<?php include("menu.php"); ?>
    <div Class="container formMensagem">
        <div class="row">
            <div class="col-12">
                 <h1> Quer ganhar um Blusão Tech-Shop?</h1>
                 <h1> Preencha e concorra!</h1>
            </div>
            <div class="col-12 imagemFormulario">
                
                <img src="imagens/Blu1.png" width="300px" class="img-fluid" >
            </div>
            <div class="col-12">
                    <h1><b style="color: rgb(50, 0, 143);" Formulario de inscrição</b></h1>
                        <form>
                            <div class="form-group col-md-6 offset-md-3 my-1">
                                <label for="exampleFormControlInput1">Nome</label>
                                <input type="text" class="form-control " id="pname" name="PrimeiroNomeDaPessoa" placeholder="Digite seu nome aqui"><br><br>
                            </div>   
                            <div class="form-group col-md-6 offset-md-3">
                                <label for="exampleFormControlInput1">Email</label>
                                <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                            </div>
                            <div class="form-group col-md-6 offset-md-3">
                                <label for="exampleFormControlTextarea1">Comentario</label>
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                                <button type="button" class="btn btn-primary col-md-6 offset-md-3 my-3">Enviar</button>
                        </form>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>