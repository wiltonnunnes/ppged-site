<div style="background-color: #007bff;">
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="<?php echo base_url('images/slider/img_01.jpg'); ?>" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo base_url('images/slider/img_02.jpg'); ?>" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="<?php echo base_url('images/slider/img_03.jpg'); ?>" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<div style="background-color: #ececec;">
	<div class="container">
		<div class="card-group">
			<?php foreach ($noticias as $noticias_item): ?>
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h4 class="card-title"><?php echo $noticias_item['titulo']; ?></h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>