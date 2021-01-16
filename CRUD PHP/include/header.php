<!DOCTYPE html>
<html>

<head>
	<title>BD</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Icon -->
	<link rel="sortcut icon" href="icon/server.svg" type="image/x-icon" />

	<!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
	<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Mascara CPF -->
	<script>
		function formatar(mascara, documento) {
			var i = documento.value.length;
			var saida = mascara.substring(0, 1);
			var texto = mascara.substring(i)
			if (texto.substring(0, 1) != saida) {
				documento.value += texto.substring(0, 1);
			}
		}
	</script>
</head>

<body>

	<?php
	date_default_timezone_set('America/Sao_Paulo');
	?>