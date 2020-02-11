<script type="text/javascript">
			$(window).scroll(function() {    
					var scroll = $(window).scrollTop();

					if (scroll >= 100) {
							$(".top-nav").addClass("light-header");
							document.getElementById("logo").src="img/logo_ppged.png";
					} else {
							$(".top-nav").removeClass("light-header");
							document.getElementById("logo").src="img/logo_ppged_white.png";
							
					}
			});
	</script>

<nav class="navbar navbar-expand-md fixed-top top-nav">
	<div class="container">
		  <a class="navbar-brand" href="<?php echo base_url(); ?>"><strong><img id="logo" class="img-fluid" src="<?php echo base_url('img/logo_ppged_white.png'); ?>" alt="" width="320"></strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(); ?>"><?php echo lang('menu_home'); ?><span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">O programa</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo site_url('apresentacao'); ?>"><?php echo lang('menu_about'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('professores'); ?>"><?php echo lang('menu_teachers'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('pesquisas'); ?>"><?php echo lang('menu_research_lines'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('teses_dissertacoes'); ?>"><?php echo lang('menu_bank_of_theses_and_dissertations'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('publicacoes'); ?>"><?php echo lang('menu_publications'); ?></a>
							<a class="dropdown-item" href="">CURSOS</a>
						</div>
			  </li>
			  <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang('menu_documents'); ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo site_url('regimento'); ?>"><?php echo lang('menu_regiment'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('reconhecimento'); ?>"><?php echo lang('menu_recognition_of_diplomas'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('resolucoes'); ?>"><?php echo lang('menu_resolutions'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('formularios'); ?>"><?php echo lang('menu_forms'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('editais'); ?>"><?php echo lang('menu_notices'); ?></a>
							<a class="dropdown-item" href="https://drive.google.com/file/d/1_UAKSMdMwxNRnewEt3COJJPvDB99Dafj/view" target="_blank">ESTRUTURA CURRICULAR</a>
							<a class="dropdown-item" href="<?php echo base_url('arquivos/CALENDARIO DE MATRICULA 2020.1.pdf'); ?>" target="_blank">CALENDÁRIO DE MATRÍCULAS</a>
						</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('selecoes'); ?>"><?php echo lang('menu_selection'); ?></a>
		      </li>
			  <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('eventos'); ?>"><?php echo lang('menu_events'); ?></a>
		      </li>
		      <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang('menu_partnerships'); ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo site_url('intercambios'); ?>"><?php echo lang('menu_exchanges'); ?></a>
							<a class="dropdown-item" href="<?php echo site_url('convenios_nacionais'); ?>">CONVÊNIOS NACIONAIS</a>
							<a class="dropdown-item" href="<?php echo site_url('convenios_internacionais'); ?>">CONVÊNIOS INTERNACIONAIS</a>
						</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('auditorios'); ?>">Auditórios</a>
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
								<p class="mt-2 mb-3 text-muted text-center"><img class="img-fluid" id="imgFooter" src="img/logo_ce.png" alt="" ></p>
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
