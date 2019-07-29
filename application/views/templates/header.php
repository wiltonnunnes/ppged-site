<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/8a8e9af584.js"></script>
		<!--<link href="<?php echo base_url('fontawesome-free-5.9.0-web/css/all.css'); ?>" rel="stylesheet">-->
		<style>
			.nav-link, .navbar-toggler {
				color: #fff;
			}
			.nav-link:hover, .navbar-toggler:hover {
				color: #f0ce00;
			}
		</style>
		<link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
		<title><?php echo $title;?></title>
	</head>
	<body>
		<div class="container">
			<div class="row">
			</div>
		</div>		
		<nav class="navbar navbar-expand-sm bg-primary navbar-fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="<?php echo base_url('images/logo-ppged_2.png'); ?>" alt="Logo" style="width: 86px;">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link link-ppged" href="#">Início</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">O Programa</a>
								<div class="dropdown-menu border border-warning rounded-0">
									<a class="dropdown-item" href="#">Apresenta&ccedil;&atilde;o</a>
									<a class="dropdown-item" href="#">Docentes</a>
									<a class="dropdown-item" href="#">Linhas de pesquisas</a>
									<a class="dropdown-item" href="#">Banco de Teses e Disserta&ccedil;&otilde;es</a>
									<a class="dropdown-item" href="#">Cursos</a>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">Documentos</a>
								<div class="dropdown-menu border border-warning rounded-0">
									<a class="dropdown-item" href="#">Regimento</a>
									<a class="dropdown-item" href="#">Reconhecimento de Diploma</a>
									<a class="dropdown-item" href="#">Resoluções</a>
									<a class="dropdown-item" href="#">Formulários</a>
									<a class="dropdown-item" href="#">Editais</a>
									<a class="dropdown-item" href="https://drive.google.com/open?id=1_UAKSMdMwxNRnewEt3COJJPvDB99Dafj">Estrutura Curricular</a>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Seleção</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="nav-link" class="dropdown-toggle" data-toggle="dropdown" href="#">Parcerias</a>
								<div class="dropdown-menu border border-warning rounded-0">
									<a class="dropdown-item" href="#">Intercâmbios</a>
									<a class="dropdown-item" href="#">Convênios Nacionais</a>
									<a class="dropdown-item" href="#">Convênios Internacionais</a>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Eventos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Auditórios</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>