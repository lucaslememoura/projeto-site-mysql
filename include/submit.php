<div class="container theme-showcase" role="main" id="containerPrincipal">
    <div class="container page-header">
        <h1>Formulário de contato</h1>
    </div>
    <form class="form-horizontal" role="form" action="submit" method="post">
        <div class="form-group">
            <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputNome" name="nome" placeholder="digite seu nome" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="digite seu E-mail" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputAssunto" class="col-sm-2 control-label">Assunto:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputAssunto" name="assunto" placeholder="digite o assunto" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputMensagem" class="col-sm-2 control-label">Mensagem:</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="5" name="mensagem" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" id="bntEnviar" name="bntEnviar" value="Enviar formulário" class="btn btn-primary">
            </div>
        </div>
    </form>
    <div class="col-sm-12">
        <ul class="list-group">
            <a href="#" class="list-group-item active">
                Dados enviados com sucesso, abaixo seguem os dados que você enviou:
            </a>
            <?php $nome = $_REQUEST['nome'];
            $email = $_REQUEST['email'];
            $assunto = $_REQUEST['assunto'];
            $mensagem = $_REQUEST['mensagem'];
            ?>
            <li class="list-group-item"><?php echo $nome?></li>
            <li class="list-group-item"><?php echo $email?></li>
            <li class="list-group-item"><?php echo $assunto?></li>
            <li class="list-group-item"><?php echo $mensagem?></li>
        </ul>
    </div>
</div>
</div> <!-- /container -->



