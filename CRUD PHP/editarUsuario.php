<?php
include('include/header.php');
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

<?php
include('include/conexao.php');
include_once('include/header.php');

$id = $_GET['id']
?>

<!-- TABELA -->
<section class="tabelaEditarUsuario">
	<hr>
	<div style="display: inline;">
		<h4><b>Editar Usuário</b>
	</div>
	<hr>
	<!-- CABEÇALHO TABELA -->
	<table class="table table-striped table-dark table-sm">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">CPF</th>
				<th scope="col">Nikname</th>
				<th scope="col">E-mail</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody>
			</tr>

			<!-- INSERIR LINHA A LINHA OS DADOS -->
			<form action="atualizarDados.php" method="POST">

				<?php

				/*
          RETORNAR DADOS DA TABELA
        */
				$sql = "SELECT * FROM cadastro WHERE id = $id";
				$busca = mysqli_query($db_connect, $sql);

				while ($array = mysqli_fetch_array($busca)) {

					$id = $array['id'];
					$cpf = $array['cpf'];
					$nikname = $array['nikname'];
					$email = $array['email'];

				?>

					<tr>
						<td>
							<div class="form-group">
								<input name="id" class="form-control" value="<?php echo $id ?>" disabled>
								<input name="id" value="<?php echo $id ?>" style="display: none;">
							</div>
						</td>
						<td>
							<div class="form-group">
								<input name="cpf" placeholder="000.000.000-00" class="form-control" value="<?php echo $cpf ?>" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input name="nikname" type="nome" class="form-control" aria-describedby="emailHelp" value="<?php echo $nikname ?>" required>
								<div class="help-block with-errors"></div>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input name="email" type="email" class="form-control" aria-describedby="emailHelp" value="<?php echo $email ?>" data-error="Por favor, informe um e-mail correto." class="form-control" placeholder="nome@exemplo.com" required>
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
								<button type="submit" class="btn btn-outline-warning btn" role="button" aria-pressed="true" style="color:#FFF;"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-cursor-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
									</svg>&nbsp;Alterar</button>
							</div>
						</td>
					<?php } ?>
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