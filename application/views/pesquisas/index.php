<ul>
<?php foreach ($pesquisas as $pesquisas_item): ?>
	<li>
		<h3><?php echo $pesquisas_item['titulo']; ?></h3>
		<br>
		<p>
		<?php 
		foreach ($pesquisas_item['professores'] as $professores_item) {
			echo anchor($professores_item['lattes'], $professores_item['nome']);
		}
		?>
		</p>
	</li>
<?php endforeach; ?>
</ul>