
<script src="../js/sideBar.js"></script>

<!------ Include the above in your HEAD tag ---------->

        <div class="content">
			<div id="jquery-accordion-menu" class="jquery-accordion-menu">
				<div class="jquery-accordion-menu-header">Menu</div>
				<ul>
					<li><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i>Início</a></li>
					<li><a href="<?php echo site_url('painel_controle/usuarios'); ?>"><i class="fa fa-user"></i>Usuários</a></li>

					<li>
						<a href="#"><i class="fa fa-cog"></i>Menu</a>
						<ul class="submenu">
							<li><a href="convenio.php">Convênios</a></li>
							<li><a href="evento.php">Eventos</a></li>
							<li><a href="<?php echo site_url('painel_controle/informativos'); ?>">Informativos</a></li>
							<li><a href="<?php echo site_url('painel_controle/noticias_anpae'); ?>">Noticias da ANPRED/FORPRED</a></li>
							<li><a href="#">Linha de Pesquisa</a></li>
							<li><a href="#">Notícias</a></li>
							<li><a href="#">Professores</a></li>
							<li><a href="#">Publicações</a></li>
							<li><a href="#">Editais</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="fa fa-sign-out"></i>Sair</a></li>
				</ul>
				<div class="jquery-accordion-menu-footer">Footer</div>
			</div>
		</div>
