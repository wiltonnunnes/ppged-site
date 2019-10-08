<script type="text/javascript">
			$(window).scroll(function() {    
					var scroll = $(window).scrollTop();

					if (scroll >= 100) {
							$(".top-nav").addClass("light-header");
							document.getElementById("logo").src="../img/logo_ppged.png";
					} else {
							$(".top-nav").removeClass("light-header");
							document.getElementById("logo").src="../img/logo_ppged_white.png";
							
					}
			});
	</script>

<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="../index.php"><strong><img id="logo" class="img-fluid" src="../img/logo_ppged_white.png" alt="" width="320"></strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Início<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O programa</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="apresentacao.php">APRESENTAÇÃO</a>
							<a class="dropdown-item" href="docentes.php">DOCENTES</a>
							<a class="dropdown-item" href="linhaDePesquisa.php">LINHAS DE PESQUISA</a>
							<a class="dropdown-item" href="bancoDeTeses.php">BANCO DE TESES E DISSERTAÇÕES</a>
							<a class="dropdown-item" href="">PUBLICAÇÕES</a>
							<a class="dropdown-item" href="">CURSOS</a>
						</div>
			  </li>
			  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Documentos</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="../Documentos/regimento.php">REGIMENTO</a>
							<a class="dropdown-item" href="../Documentos/reconhecimentoDiploma.php">RECONHECIMENTO DE DIPLOMAS</a>
							<a class="dropdown-item" href="../Documentos/resolucoes.php">RESOLUÇÕES</a>
							<a class="dropdown-item" href="../Documentos/formulario.php">FORMULÁRIOS</a>
							<a class="dropdown-item" href="../Documentos/editais.php">EDITAIS</a>
							<a class="dropdown-item" href="https://drive.google.com/file/d/1_UAKSMdMwxNRnewEt3COJJPvDB99Dafj/view">ESTRUTURA CURRICULAR</a>
						</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../Selecao/index.php">SELEÇÃO</a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="../Eventos/index.php">Eventos</a>
		      </li>
		      <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcerias</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="../Parcerias/intercambio.php">INTERCÂBIOS</a>
							<a class="dropdown-item" href="">CONVÊNIOS NACIONAIS</a>
							<a class="dropdown-item" href="">CONVÊNIOS INTERNACIONAIS</a>
						</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../Auditorios/index.php">Auditórios</a>
		      </li>

		    </ul>
		  </div>	
	</div>
</nav>

<div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Recuperar Senha</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
							<form class="form-signin">								
								<div class="form-label-group">
									<label for="inputEmail">Inserir E-Mail</label>
									<input type="email" id="inputEmail" class="form-control" placeholder="fulano@hotmail.com" required autofocus>
								</div>
								<button class="mt-3 btn btn-md btn-primary btn-block" type="submit">Enviar</button>
								<p class="mt-2 mb-3 text-muted text-center"><img class="img-fluid" id="imgFooter" src="../img/logo_ce.png" alt="" ></p>
							</form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div id="modalRegistrar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Registre-se</h3>
                <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
							<form class="form-signin" name= "formRegistro" action="BD/processarRegistro.php" method="post">								
								<div class="form-label-group">
									<label for="inputEmail">Inserir E-Mail</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="fulano@hotmail.com" required autofocus>
								</div>
								<div class="form-label-group">
									<label for="inputEmail">Nome</label>
									<input type="text" id="nome" name="nome" class="form-control" placeholder="fulano" required autofocus>
								</div>
								<div class="form-label-group">
									<label for="inputEmail">Senha</label>
									<input type="password" id="senha" name="senha" class="form-control" placeholder="Informe Sua Senha" required autofocus>
								</div>
								<button class="mt-3 btn btn-md btn-primary btn-block" type="submit">Enviar</button>
								<p class="mt-2 mb-3 text-muted text-center"><img class="img-fluid" id="imgFooter" src="img/logo_ce.png" alt="" ></p>
							</form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>
            </div>
        </div>
    </div>
</div>
