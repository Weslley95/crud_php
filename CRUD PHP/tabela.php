<?php

include('include/header.php');
include('include/conexao.php');

?>

<!-- navbar -->
<section class="navbar">
  <nav class="">
    <a class="navbar-brand" href="index.php">
      <img src="icon/database_data_20916.png" width="50" height="50" alt="">
      Projeto Programação Web
    </a>
  </nav>
  <a href="index.php" style="margin-right: 5%;"><button class="btn btn-outline-primary" type="submit" style="color: white;">Início</button></a>
</section>

<!-- CSS -->
<?php
include_once('include/header.php');
?>

<!-- TABELA -->
<section class="tabela">
  <hr>
  <div style="display: inline;">
    <h4><b>Usuários</b>
      <a href="novoUsuario.php" style="margin-left: 74%;"><button class="btn btn-success btn-sm" type="submit" style="color: white;"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
          </svg>&nbsp;Adicionar</button></a>
  </div>
  <hr>
  <!-- CABEÇALHO TABELA -->
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-striped table-dark table-sm">

      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">CPF</th>
          <th scope="col">Nikname</th>
          <th scope="col">E-mail</th>
          <th scope="col">Última Atualização</th>
          <th scope="col">Editar</th>
          <th scope="col">Deletar</th>
        </tr>
      </thead>
      <tbody>
        <tr>

          <?php
          /*
          RETORNAR DADOS DA TABELA
        */
          $sql = "SELECT * FROM cadastro";
          $busca = mysqli_query($db_connect, $sql);

          while ($array = mysqli_fetch_array($busca)) {

            $id = $array['id'];
            $cpf = $array['cpf'];
            $nikname = $array['nikname'];
            $email = $array['email'];
            $data = $array['data'];

          ?>

            <!-- INSERIR LINHA A LINHA OS DADOS -->
        <tr>
          <td><?php echo $id ?></td>
          <td><?php echo $cpf ?></td>
          <td><?php echo $nikname ?></td>
          <td><?php echo $email ?></td>
          <td><?php echo $data ?></td>

          <!-- BUTTON PARA EDITAR LINHA DA TABELA -->
          <td><a href="editarUsuario.php?id=<?php echo $id ?>" class="btn btn-outline-warning btn-sm" role="button" aria-pressed="true" style="color:#FFF;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
              </svg>&nbsp;Editar</a>
          </td>

          <!-- Button para deletar usuario -->
          <td>
            <a href="deletarUsuario.php?id=<?php echo $id ?>nikname=<?php echo $nikname ?>" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true" style="color:#FFF;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg>&nbsp;Deletar</a>
          </td>
        </tr>

      <?php } ?>

      </tr>
      </tbody>
    </table>
</section>

<?php

// Footer
include('include/footer.php');

?>