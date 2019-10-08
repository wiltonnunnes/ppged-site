<html>
	<head>
		<title>PPGED - Pograma de Pós Graduação em Educação</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark">
			<?php echo anchor('', img(array('src' => 'images/logo-ppged_2_short.png', 'alt' => 'logo', 'style' => 'width:86px')), array('class' => 'navbar-brand')); ?>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<div class="dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        				<?php echo $_SESSION['user_logged']['login']; ?>
      				</a>
					<div class="dropdown-menu">
						<?php echo anchor('usuarios/logout', 'Sair', array('class' => 'dropdown-item')); ?>
					</div>
				</div>
				</li>
			</ul>
		</nav>