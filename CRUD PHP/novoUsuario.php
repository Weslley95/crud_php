<?php
include('include/conexao.php');
include_once('include/header.php');
?>

<!-- navbar -->
<section class="navbar">
    <nav class="">
        <a class="navbar-brand">
            <img src="icon/database_data_20916.png" width="50" height="50" alt="">
            Projeto Programação Web
        </a>
    </nav>
    <a href="tabela.php" style="margin-right: 5%;"><button class="btn btn-outline-primary" type="submit" style="color: white;">Tabela</button></a>
</section>

<!-- TABELA -->
<section class="tabelaNovoUsuario">
    <hr>
    <div style="display: inline;">
        <h4><b>Novo Usuário</b>
    </div>
    <hr>
    <table class="table table-striped table-dark table-sm">
        <thead>
            <tr>
                <th scope="col">CPF</th>
                <th scope="col">Nikname</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
        <tbody>
            </tr>
            <!-- INSERIR LINHA A LINHA OS DADOS -->
            <form action="inserirNovoUsuario.php" method="POST">
                <tr>
                    <td>
                        <div class="form-group">
                            <input name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="nikname" type="nome" class="form-control" aria-describedby="emailHelp" placeholder="Nome" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input name="email" type="email" data-error="Por favor, informe um e-mail correto." class="form-control" aria-describedby="emailHelp" placeholder="nome@exemplo.com" required>
                            <div class="help-block with-errors"></div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </td>
                    <div class="form-group">
                        <?php $agora = date('d/m/Y H:i'); ?>
                        <input name="data" type="name" class="form-control" aria-describedby="emailHelp" style="display: none;" id='data' value=<?php echo date('d/m/Y_H:i'); ?>>
                    </div>

                    <!-- BUTTON PARA EDITAR LINHA DA TABELA -->
                    <td>
                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-success btn" role="button" aria-pressed="true" style="color:#FFF;"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                </svg>&nbsp;Adicionar</button>
                        </div>
                    </td>
            </form>
            </tr>
            </tr>
        </tbody>
    </table>
</section>

<?php
// Footer
include('include/footer.php');
?>