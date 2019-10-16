<section class="info-section pt-6 mt-5">
	<div class="container">
		<div class="head-box text-center">
			<h2>Notícias</h2>
			<h6 class="text-underline-primary mb-5">Todas as notícias</h6>
        </div>

        <div class="row">
			<div class="col-md-12 mb-sm-12">
                <div class="container-fluid gedf-wrapper">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="h5">Notícias</div>
                                    <div class="h7">Confira abaixo as novidades relacionadas ao LIFE e às suas instituições parceiras, produzidas pelo LIFE.</div>
                                    <form class="form-inline mt-5 ml-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" placeholder="Buscar Notícia" size="25%">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary" type="button" id="button-addon2">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <?php foreach ($noticias_anpae as $noticias_anpae_item): ?>
                        <!--- \\\\\\\Post-->
                        <div class="col-md-4 gedf-main">
                            <div class="card gedf-card">
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 12 MAI 2019 POR EU</div>
                                    <a class="card-link" href="../post/1">
                                        <h5 class="card-title"><?php echo $noticias_anpae_item['titulo']; ?></h5>
                                    </a>

                                    <p class="card-text">
                                        Legenda
                                    </p>
                                    <div>
                                        <span class="badge badge-primary">a</span>
                                        <span class="badge badge-primary">b</span>
                                        <span class="badge badge-primary">c</span>
                                        <span class="badge badge-primary">d</span>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="h7 text-muted">Laboratório Interdisciplinar de Formação de Educadores</div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->
                        <?php endforeach; ?>

                        <nav class="navNoticia">
                            <?php echo $links; ?>
                        </nav>

                    </div>
                </div>
			</div>
		</div>  
	</div>
</section>