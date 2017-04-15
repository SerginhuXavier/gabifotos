<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gabi Fotos</span></a>
        </div>

        <div class="clearfix"></div>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">

                    <li>
                        <a href="<?php echo $url; ?>home"><i class="fa fa-home"></i> Home</a>
                    </li>

                    <li>
                        <a href="<?php echo $url; ?>listaServico"><i class="fa fa-camera-retro"></i> Serviços</a>
                    </li>
                    <li>
                        <a><i class="fa fa-users"></i> Funcionários <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo $url; ?>cadFuncionario">Cadastrar</a></li>
                            <li><a href="<?php echo $url; ?>listaFuncionario">Listar</a></li>
                            <li><a href="<?php echo $url; ?>categoriaFuncionario">Categorias</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo $url; ?>cadCliente">Cadastrar</a></li>
                            <li><a href="<?php echo $url; ?>listaCliente">Listar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-photo"></i> Eventos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo $url; ?>cadEvento">Cadastrar</a></li>
                            <li><a href="<?php echo $url; ?>listaEvento">Listar</a></li>
                        </ul>
                    </li>
                    <!--li>
                            <a><i class="fa fa-bar-chart-o"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                    <li><a href="cadUsuario">Cadastrar</a></li>
                                    <li><a href="listaUsuario">Listar</a></li>
                            </ul>
                    </li-->
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Usuário
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Perfil</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
