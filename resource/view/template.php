<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" 
        href="/cervejariadonind/resource/assets/bootstrap/css/bootstrap.min.css">
    <title>Mini-Curso NIND</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <!-- FORMULARIO DE CADASTRO -->
            <br>
                <div class="row">
                    <div class="col-xs-6">
                        <h3>Cadastrar Cerveja</h3>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="/cervejariadonind/cerveja/cadastrar" class="btn btn-sm btn-default">Cadastrar</a>
                    </div>
                </div>
                <div class="row">
                    <br>
                    <form class="form-horizontal" action="/cervejariadonind/cerveja/salvar" method="POST">
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nome">Nome da Cerveja</label>
                            <div class="col-md-4">
                                <input id="nome" name="nome" placeholder="Ex.: Budweiser" class="form-control" type="text">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="preco">Preço</label>
                            <div class="col-md-4">
                                <input id="preco" name="preco" placeholder="10.00" class="form-control" type="text">

                            </div>
                        </div>

                        <!-- Appended Input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="teorAlcoolico">Teor Alcóolico</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input id="teorAlcoolico" name="teorAlcoolico" class="form-control" placeholder="4,5" type="text">
                                    <span class="input-group-addon">%</span>
                                </div>

                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="submit"></label>
                            <div class="col-md-4">
                                <button id="submit" name="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/cervejariadonind/resource/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>