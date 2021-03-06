<section class="info-section">
	<div class="container">
		<div class="head-box text-center mb-5">
			<h2 class="title">Notícias da ANPED / FORPRED</h2>
			<h6 class="text-underline-primary">Notícias, eventos, editais</h6>
    	</div>
        <div class="row">
			<?php include APPPATH. 'views/templates/blog.php';?>
        </div>
	</div>
</section> 


<section class="info-section bg-departamentos px-0" style=" padding-top: 0px; padding-bottom: 0px;">
	<div class="container-fluid">
		<div class="row">
            <div class="col-md-6 col-lg-6 content-half mt-md-0 pt-4">
                <div class="head-box mb-5 pl-5 mt-2">
					<h2 class="text-white">INFORMES DO PPGED</h2> 
					<a href="<?php echo site_url('informativos'); ?>"><h6 class="text-white text-underline-rb-white">Veja todos os nossos informes <i class="fa fa-plus-circle" aria-hidden="true" style="font-size:20px; margin-left:1%;"></i></h6></a>
				</div>
                <ul class="pl-5">
                    <li>
						<a href="<?php echo site_url('informativos/' . $informativos[0]['informativo_id']); ?>" style="color: white"><i class="fa fa-file fa-white" aria-hidden="true"></i>
                    	<span class="list-content">
                    		<strong><?php echo $informativos[0]['categoria']; ?></strong>
                    		<br><?php echo $informativos[0]['titulo']; ?>.
                    	</span></a>
                	</li>
                <?php for ($i = 1; $i < count($informativos); $i++): ?>
                	<li>
                    	<a href="<?php echo site_url('informativos/' . $informativos[$i]['informativo_id']); ?>"><i class="fa fa-file fa-white" aria-hidden="true"></i></a>
                    	<span class="list-content">
							<strong><?php echo $informativos[$i]['categoria']; ?></strong>
                    		<br><?php echo $informativos[$i]['titulo']; ?>.
                    	</span>
                    </li>
                <?php endfor; ?>
                </ul>
            </div>
            <div class="col-md-6 p-0 m-0">
            	<img src="img/ce.jpg" class="img-responsive d-none d-md-block" style="height:640px; width:100%;">
            </div>
        </div>
</section> 

 <section class="info-section pt-5" style="padding:0">
	<div class="container">
		<div class="head-box text-center">
			<h2>Revista Educação em Questão</h2>
			<h6 class="text-underline-primary mb-5"></h6>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="media media-testimonial">
                    <div class="media-left">
                        <a href="#">
                        <?php echo img('images/revista-ico.png', FALSE, array('width' => '90', 'height' => '90')); ?>
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="text-justify" style="font-size:15px;"> A Revista Educação em Questão, editada desde 1987, 
							nasceu da iniciativa de professores do Departamento de Educação da Universidade Federal do Rio Grande do Norte (UFRN), quando o Mestrado em Educação,
							 instalado em 1978, completou nove anos formando mestres nas ...
						</p>
						<a href="http://www.revistaeduquestao.educ.ufrn.br/" target="_blank" title="Read more" class="read-more" style="color:#004d95; font-weight:bold;">Ver mais<i class="fa fa-angle-double-right ml-2"></i></a>						
                        
                    </div>
                </div>
			</div>
		</div>
</section>

 <section class="info-section ">
	<div class="container">

		<div class="row mbr-justify-content-center">
			<div class="col-lg-6 mbr-col-md-10">
				<a href="<?php echo site_url('apresentacao'); ?>">
					<div class="wrap">
						<div class="ico-wrap">
							<span class="mbr-iconfont fa-volume-up fa"></span>
						</div>
						<div class="text-wrap vcenter">
							<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Apresentação</h2>
							<p class="mbr-fonts-style mbr-text display-6">O Programa de Pós-Graduação em Educação/CCSA/UFRN, contribui para o desenvolvimento da pesquisa e para a formação de pesquisadores em Educação.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<div class="wrap">
					<div class="ico-wrap">
						<span class="mbr-iconfont fa-calendar fa"></span>
					</div>
					<div class="text-wrap vcenter">
						<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Calendário</h2>
						<p class="mbr-fonts-style text1 mbr-text display-6">Veja nosso calendário acadêmico com as datas dos eventos do PPGEd, auxiliando no planejamento mensal dos professores e alunos.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<div class="wrap">
					<div class="ico-wrap">
						<span class="mbr-iconfont fa-globe fa"></span>
					</div>
					<div class="text-wrap vcenter">
						<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Banco de publicações</h2>
						<p class="mbr-fonts-style text1 mbr-text display-6">Contamos com a produção atuante dos professores e alunos. Temos também  com dissertações e teses defendidas pelos alunos do PPGEd.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mbr-col-md-10">
				<a href="<?php echo site_url('pesquisas'); ?>">
					<div class="wrap">
						<div class="ico-wrap">
							<span class="mbr-iconfont fa-search fa"></span>
						</div>
						<div class="text-wrap vcenter">
							<h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Linhas de Pesquisa</h2>
							<p class="mbr-fonts-style text1 mbr-text display-6">A proposta pedagógica do PPGEd/UFRN estrutura-se em pesquisas e ensino organizados em Linhas de Pesquisa, que contemplam os objetos de estudos dos participantes.</p>
						</div>
					</div>
				</a>
			</div>




</div>
</section> 
