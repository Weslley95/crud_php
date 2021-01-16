<?php

include('include/conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM cadastro WHERE id = '$id'";

$delete = mysqli_query($db_connect, $sql);

include_once('include/header.php');
?>

<section class="informativo">
	<h4>Deletado com sucesso</h4>
	<a href="tabela.php"><button type="button" class="btn btn-success btn-sm">OK</button></a>

</section>

<?php

// Footer
include('include/footer.php');

?>