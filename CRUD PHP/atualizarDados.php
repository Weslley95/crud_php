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
</section>

<?php
include_once('include/header.php');
include('include/conexao.php');
include('include/valida_cpf.php');

$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nikname = $_POST['nikname'];
$email = $_POST['email'];
$data = $_POST['data'];

if (valida_cpf($cpf) == true) {

	/*
	PASSANDO OS DADOS
	*/
	$sql = "UPDATE cadastro SET cpf = '$cpf', nikname = '$nikname', email = '$email', data = '$data' WHERE id=$id";
	$atualizar = mysqli_query($db_connect, $sql); ?>
	<section class="informativo">
		<h4>Dados atualizado com sucesso!</h4>
		<a href="tabela.php"><button type="button" class="btn btn-success btn-sm"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
				</svg>&nbsp;OK</button></a>
	</section>
<?php
}
// Mensagem de erro, usuário retorna para tela inicial 
else {
?>
	<section class="informativo">
		<h4>CPF invalído, retorne e preenche novamente</h4>
		<a href="editarUsuario.php?id=<?php echo $id ?>"><button type="button" class="btn btn-danger btn-sm"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-person-x-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
				</svg>&nbsp;OK</button></a>
	</section>
<?php
}
?>

<?php

// Footer
include('include/footer.php');

?>