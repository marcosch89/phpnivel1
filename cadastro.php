<?php
require_once 'restrito.php';
require_once 'header.php';
require_once 'menu.php';
?>

<div class="col-md-8 col-md-offset-2">

    <form class="form-horizontal" role="form">
        <h1 class="text-center">Dados Pessoais</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Nome Completo:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div>
            <div class="form-group">

                <label class="col-sm-3 control-label">Estado:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="estado1"></select><br />
                </div>
                <label class="col-sm-3 control-label"> Cidade:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="cidade1"></select>
                </div>

                <script type="text/javascript">
                    new dgCidadesEstados({
                        cidade: document.getElementById('cidade1'),
                        estado: document.getElementById('estado1')
                    })
                </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Endereço:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Endereço">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Registro Geral:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="RG">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Estado Civil:</label>
            <div class="col-sm-9">
                <select class="form-control">
                    <option>Solteiro</option>
                    <option>Casado</option>
                    <option>Viúvo</option>
                    <option>Divorciado</option>
                    <option>União Estável</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">C.P.F.:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="CPF">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Telefone:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Telefone">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Email">
            </div>
        </div>
        <h1 class="text-center">Processos em Andamento</h1>
        <div class="form-group">
            <label class="col-sm-3 control-label">Gratificação de Fronteira</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control" placeholder="Observação">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Gratificação de Atividade</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control" placeholder="Observação">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">28,86%</label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox">
                    </span>
                    <input type="text" class="form-control" placeholder="Observação">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-success">Cadastre-se</button>
            </div>
        </div>
    </form>
</div>
<?php require_once 'footer.php'; ?>