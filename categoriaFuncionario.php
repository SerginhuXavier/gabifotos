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
                                        <h2>Listagem de Categorias </h2>
                                        <p class="nav navbar-right panel_toolbox">
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalCadastroCategoria">Adicionar</button>
                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content" id="listaCategoria">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Descrição</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once 'listaCategorias.php';
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

        <div class="modal fade" tabindex="-1" role="dialog" id="modalCadastroCategoria">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Cadastrar Categoria</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left input_mask" id="formCategoria">
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="descricao" placeholder="Descrição">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btnCadastrarCategoria">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="modalExcluirCategoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ExcluirCategoriaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="ExcluirCategoria">Excluir Categoria</h4>
                    </div>
                    <div class="modal-body">
                        <div style="padding: 5px 20px;">

                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title bg-danger" style="padding: 8px;margin: 0 0 5px 0;"> <strong>ATENÇÃO!</strong><br /> Essa ação é irreversível</h5>
                                    <p class="card-text">
                                        Você tem certeza que deseja excluir a categoria: <span id="CategoriaNome"></span>
                                    </p>
                                </div>
                            </div>
                            <p>

                            </p>
                            <input type="hidden" id="idCategoriaExcluir" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-danger" id="btnExcluirCategoria">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                var dt = ($("#datatable").length) ? $("#datatable").dataTable() : null;

                $("#btnCadastrarCategoria").click(function () {
                    var categoria = $("#formCategoria #descricao").val();

                    $.post('control/controleCategoria.php', {opcao: 'cadastrar', categoria: categoria},
                            function (r) {
                                $("#listaCategoria").html("");
                                $("#listaCategoria").load('listaCategorias.php');
                                $("#formCategoria #descricao").val('');
                                $("#modalCadastroCategoria").modal('hide');
                            });
                });
            });
        </script>
    </body>
</html>