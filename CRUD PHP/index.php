<?php include('include/header.php'); ?>

<!-- navbar -->
<section class="navbar">
	<nav class="">
		<a class="navbar-brand" href="#">
			<img src="icon/database_data_20916.png" width="50" height="50" alt="">
			Projeto Programação Web
		</a>
	</nav>
	<a href="tabela.php" style="margin-right: 5%;"><button class="btn btn-outline-primary" type="submit" style="color: white;">Tabela</button></a>
</section>

<?php include_once('include/header.php'); ?>

<section class="formulario">
	<form action="inserirDados.php" method="POST" class="ol-sm-2 col-form-label col-form-label-sm" data-toggle="validator">
		<div class="form-group">
			<label for="exampleInputEmail1"><b>Nikname</b></label>
			<input name="nikname" type="nome" class="form-control" aria-describedby="emailHelp" placeholder="Nome" required>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1"><b>E-mail</b></label>
			<input name="email" type="email" data-error="Por favor, informe um e-mail correto." class="form-control" aria-describedby="emailHelp" placeholder="nome@exemplo.com" required>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1"><b>CPF</b></label>
			<input name="cpf" class="form-control" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
			<?php $agora = date('d/m/Y H:i'); ?>
			<input name="data" type="name" class="form-control" aria-describedby="emailHelp" style="display: none;" id='data' value=<?php echo date('d/m/Y_H:i'); ?>>
		</div>
		<hr>
		<div class="text-center">
			<button type="submit" class="btn btn-primary btn-sm"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
				</svg>&nbsp;Enviar</button>
		</div>
	</form>
</section>

<?php

// Footer
include('include/footer.php');
?>