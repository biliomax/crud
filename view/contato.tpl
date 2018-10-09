<h3>Entre em conato conosco </h3>
<hr>

<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">

        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="" name="cli_nome" class="form-control" minlength="3" required>
        </div>

        <div class="col-md-4">
            <label>Email:</label>
            <input type="email" value="" name="cli_email" class="form-control" required>
        </div>

        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="" name="cli_celular" class="form-control" required>
        </div>

    </section>

    <section class="row" id="btnenviar">

        <div class="col-md-8">
            <label>Digite sua Mensagem</label>
            <textarea class="col-md-10"></textarea>
        </div>

    </section>

    <div class="col-md-4">
        <br> <button type="submit" class="btn btn-geral btn-block"><i class="glyphicon glyphicon-ok"></i> Enviar</button>
    </div>

</form>