<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once 'includes/head.php';
        ?>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">


                <!-- sidebar menu -->
                <?php include 'includes/menu.php'; ?>
                <!-- /sidebar menu -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Listagem de Funcionários </h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Email</th>
                                                    <th>Telefone</th>
                                                    <th>Categorias</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once 'listaFuncionarios.php';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->
                <?php
                require_once './includes/footer.php';
                ?>

            </div>
        </div>
        <!-- modal de cadastro de servico -->
        <div id="modalCadastroServico" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Serviço</h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 5px 20px;">
                            <form id="antoform" class="form-horizontal calender" role="form">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Descrição</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="descricao" placeholder="descricao">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success antosubmit">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modalExcluirFuncionario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ExcluirFuncionarioLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="ExcluirFuncionarioLabel">Excluir Funcionário</h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 5px 20px;">

                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title bg-danger" style="padding: 8px;margin: 0 0 5px 0;"> <strong>ATENÇÃO!</strong><br /> Essa ação é irreversível</h5>
                                    <p class="card-text">
                                        Você tem certeza que deseja excluir o funcionário: <span id="funcionarioNome"></span>
                                    </p>
                                </div>
                            </div>
                            <p>
                                
                            </p>
                            <input type="hidden" id="idFuncionarioExcluir" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-danger" id="btnExcluirFuncionario">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#modalExcluirFuncionario").on('show.bs.modal', function (e) {
                    $("#funcionarioNome").html($(e.relatedTarget).data('name'));
                    $("#idFuncionarioExcluir").val($(e.relatedTarget).data('id'));
                });

                $("#modalExcluirFuncionario").on('hide.bs.modal', function (e) {
                    $("#funcionarioNome").html('');
                    $("#idFuncionarioExcluir").val('');
                });


                $("#btnExcluirFuncionario").click(function () {
                    var idFuncionario = $("#idFuncionarioExcluir").val();

                    $.post('control/controleFuncionario.php', {opcao: 'excluir', idFuncionario: idFuncionario},
                            function (r) {
                                console.log(r);
                                $("#modalExcluirFuncionario").modal('hide');
                                $("#datatable tbody").load('listaFuncionarios.php');
                            });
                });
            });
        </script>
    </body>
</html>