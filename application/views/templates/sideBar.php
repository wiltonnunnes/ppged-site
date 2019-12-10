<script src="<?php echo base_url('js/sideBar.js'); ?>"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<div class="content">
			<div id="jquery-accordion-menu" class="jquery-accordion-menu">
				<div class="jquery-accordion-menu-header">Menu</div>
				<ul>
					<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Início</a></li>
					<li>
						<a href="#"><i class="fa fa-cog"></i>O Programa</a>
						<ul class="submenu">
							<li><a href="<?php echo site_url('apresentacao'); ?>">apresentacao</a></li>
							<li><a href="<?php echo site_url('professores'); ?>">Docentes</a></li>
							<li><a href="<?php echo site_url('pesquisas'); ?>">Linha de pesquisa</a></li>
							<li><a href="<?php echo site_url('teses_dissertacoes'); ?>">Banco de teses e dissertações</a></li>
							<li><a href="#">Publicações</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-book"></i>Documentos</a>
						<ul class="submenu">
							<li><a href="<?php echo site_url('regimento'); ?>">Regimento</a></li>
							<li><a href="<?php echo site_url('reconhecimento'); ?>">Reconhecimento de diploma</a></li>
							<li><a href="<?php echo site_url('resolucoes'); ?>">Resoluções</a></li>
							<li><a href="<?php echo site_url('formularios'); ?>">Formulários</a></li>
							<li><a href="<?php echo site_url('editais'); ?>">Editais</a></li>
							<li><a href="https://drive.google.com/file/d/1_UAKSMdMwxNRnewEt3COJJPvDB99Dafj/view" target="_blank">Estrutura Curricular</a></li>
						</ul>
					</li>

					<li>
						<a href="<?php echo site_url('selecoes'); ?>"><i class="fa fa-tags"></i>Seleção</a>
					</li>
					
					<li>
						<a href="#"><i class="fa fa-university"></i>Parcerias </a>
						<ul class="submenu">
							<li><a href="<?php echo site_url('intercambios'); ?>">Intercâmbios</a></li>
							<li><a href="<?php echo site_url('convenios_nacionais'); ?>">Convênios Nacionais</a></li>
							<li><a href="<?php echo site_url('convenios_internacionais'); ?>">Convênios Internacionais</a></li>
						</ul>
					</li>

					<li><a href="<?php echo site_url('eventos'); ?>"><i class="fa fa-newspaper-o"></i>Eventos </a></li>

					<li><a href="<?php echo site_url('auditorios'); ?>"><i class="fa fa-suitcase"></i>Auditórios </a></li>
				</ul>
				<div class="jquery-accordion-menu-footer">Footer</div>
			</div>
		</div>
