<!DOCTYPE html>

<html>
	<head>
		<title>PPGED - Pograma de Pós Graduação em Educação</title>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- CSS -->
		<?php
		echo link_tag('css/style.css');
		echo link_tag('css/font-awesome.css');
		?>
		<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" id="bootstrap-css">

		<!-- JavaScript -->
		<script src="<?php echo base_url('js/jquery.js'); ?>"></script>
		<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
		<script src="<?php echo base_url('js/jquery-1.11.js'); ?>"></script>

		<!-- Icone -->
		<link rel="shortcut icon" href="<?php echo base_url('img/icon.ico'); ?>" >

		<!-- Edicao Tabela -->
		<?php echo link_tag('css/tabela.css'); ?>
		<script src="<?php echo base_url('js/jquery-tabela.js'); ?>"></script>
		<script src="<?php echo base_url('js/bootstrap-tabela.js'); ?>"></script>
		<script src="<?php echo base_url('ckeditor/ckeditor.js'); ?>"></script>  
	</head>
	<body>

<?php date_default_timezone_set('America/Fortaleza'); ?>