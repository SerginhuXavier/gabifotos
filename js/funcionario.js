$(document).ready(function () {
    dt = ($("#datatable").length) ? $("#datatable").dataTable({ responsive: true }) : null ;

    $("#btnCadastrarCategoria").click(function () {
        var categoria = $("#formCategoria #descricao").val();

        $.post('control/controleCategoria.php', {opcao: 'cadastrar', categoria: categoria},
                function (r) {
                    $("#listaCategorias").html("");
                    $("#listaCategorias").load('listaCategoriasCheck.php', function () {
                        initializeDomElements();
                        Manager.handleVisibility(CONTAINER_ID, false);
                    });
                    $("#formCategoria #descricao").val('');
                    $("#modalCadastroCategoria").modal('hide');
                });
    });

    $("#telefone").keydown(function () {
        var num = $(this).val();

        if (isNumero()) {
            return isPhone(num, 'telefone');
        } else {
            return false;
        }

    });

    $("#btnCadFuncionario").click(function () {
        var nome = $("#nome").val();
        var telefone = $("#telefone").val();
        var email = $("#email").val();
        var categorias = "";
        var opcao = $("#opcao").val();
        console.log(opcao);

        var validNome, validTelefone, validEmail, validCategoria = false;

        $.each($("input[name='categoriaCheck']"), function (key, value) {
            if ($(this).is(':checked')) {
                categorias += $(this).val() + ",";
            }
        })
        categorias = categorias.replace(/,+$/, '');


        if (nome == '' || nome == 'Nome') {
            validateBootstrap("nome", "Você deve preencher o nome", 1);
            validNome = false;
        } else {
            validateBootstrap("nome", "", 0);
            validNome = true;
        }

        if (email == '' || email == 'Email') {
            validateBootstrap("email", "Você deve preencher o email", 1);
            validEmail = false;
        } else if (!IsEmail(email)) {
            validateBootstrap("email", "Você deve preencher um email válido", 1);
            validEmail = false;
        } else {
            validateBootstrap("email", "", 0);
            validEmail = true;
        }

        if (telefone == '' || telefone == 'Telefone') {
            validateBootstrap("telefone", "Você deve preencher o telefone", 1);
            validTelefone = false;
        } else if (!isPhone(telefone, 'telefone')) {
            validateBootstrap("telefone", "Você deve preencher um telefone válido", 1);
            validTelefone = false;
        } else {
            validateBootstrap("telefone", "", 0);
            validTelefone = true;
        }

        if (categorias == '') {
            validateBootstrap("categorias", "Você deve selecionar, pelo menos, uma categoria", 1);
            validCategoria = false;
        } else {
            validateBootstrap("categorias", "", 0);
            validCategoria = true;
        }

        if (validNome && validEmail && validTelefone && validCategoria) {
            var idFuncionario = (opcao == 'alterar') ? $("#idFuncionario").val() : '0';

            $.post('control/controleFuncionario.php',
                    {opcao: opcao, categoria: categorias, nome: nome, telefone: telefone, email: email, idFuncionario: idFuncionario},
                    function (r) {
                        console.log(r);
                    });
        }
    });

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
//                    $("#datatable tbody").load('listaFuncionarios.php');

                    var posicao = dt.fnGetPosition($("#linha" + idFuncionario)[0]);
                    dt.fnDeleteRow(posicao)
                });
    });
});