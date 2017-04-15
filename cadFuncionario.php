
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once 'includes/head.php';
        ?>
    </head>

    <body class="nav-md">
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

        <div class="container body">
            <div class="main_container">
                <!-- sidebar menu -->
                <?php require_once 'includes/menu.php'; ?>
                <!-- /sidebar menu -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="x_panel">
                                <?php
                                require_once 'model/funcionariosDao.php';
                                $objFuncionario = new funcionario();
                                $objFuncionarioDao = new FuncionariosDao();
                                $idFuncionario = (int) filter_input(INPUT_GET, 'id');
                                $objFuncionario->setIdFuncionario($idFuncionario);

                                $funcionario = $objFuncionarioDao->listaFuncionario1($objFuncionario);

                                $mensagem = ($funcionario) ? "alterar" : "cadastrar";
                                ?>
                                <div class="x_title">
                                    <h2><?php echo ucfirst($mensagem); ?> Funcionário </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask">
                                        <input type="hidden" id="opcao" value="<?php echo $mensagem; ?>" />
                                        <input type="hidden" id="idFuncionario" value="<?php echo $idFuncionario; ?>" />

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" id="form-group-nome">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            <input type="text" value="<?php echo $funcionario['nome']; ?>" class="form-control has-feedback-left" id="nome" placeholder="Nome">
                                            <span class="glyphicon form-control-feedback" id="icon-nome" aria-hidden="true"></span>
                                            <label class="control-label" id="label-nome"></label>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" id="form-group-telefone">
                                            <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                                            <input type="text" value="<?php echo $funcionario['email']; ?>" class="form-control has-feedback-left" id="telefone" placeholder="Telefone">
                                            <span class="glyphicon form-control-feedback" id="icon-telefone" aria-hidden="true"></span>
                                            <label class="control-label" id="label-telefone"></label>
                                        </div>

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback" id="form-group-email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            <input type="text" value="<?php echo $funcionario['telefone']; ?>" class="form-control has-feedback-left" id="email" placeholder="Email">
                                            <span class="glyphicon form-control-feedback" id="icon-email" aria-hidden="true"></span>
                                            <label class="control-label" id="label-email"></label>
                                        </div>

                                        <div class="col-xs-12" id="categorias">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2 class="control-label"> Categorias</h2>
                                                    <p class="nav navbar-right panel_toolbox">

                                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalCadastroCategoria">Adicionar</button>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <div class="has-feedback" id="form-group-categorias">
                                                        <div class="col-xs-12 form-group has-feedback" id="listaCategorias">
                                                            <?php
                                                            require_once './listaCategorias.php';
                                                            ?>
                                                        </div>
                                                        <span class="glyphicon form-control-feedback" id="icon-categorias" aria-hidden="true"></span>
                                                        <label class="control-label" id="label-categorias"></label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <button type="button" id="btnCadFuncionario" class="btn btn-success">Salvar</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    <?php require_once 'includes/footer.php' ?>
    <!-- footer content -->
    <script src="<?php echo $url; ?>js/funcionario.js">
        
    </script>
</div>
</div>
</body>
</html>
