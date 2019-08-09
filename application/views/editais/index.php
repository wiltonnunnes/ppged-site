<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Edital</th>
				<th>Início</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($editais as $editais_item): ?>
			<tr>
				<td>
					<a href="<?php echo base_url('uploads/arquivos/editais/' . $editais_item['arquivo']); ?>">
						<?php echo $editais_item['titulo']; ?>	
					</a>
				</td>
				<td>
					<?php echo $editais_item['data']; ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>