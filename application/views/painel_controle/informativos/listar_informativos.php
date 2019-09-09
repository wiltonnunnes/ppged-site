<?php echo anchor('informativos/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>T&iacute;tulo</th>
			<th>Categoria</th>
			<th>Status</th>
			<th>Data</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($informativos as $informativos_item): ?>
		<tr>
			<td><?php echo $informativos_item['titulo']; ?></td>
			<td><?php echo $informativos_item['categoria']; ?></td>
			<td><?php echo $informativos_item['status']; ?></td>
			<td><?php echo $informativos_item['data']; ?></td>
			<td>
				<?php 
				echo anchor('informativos/deletar/' . $informativos_item['informativo_id'], 'Remover'); 
				echo anchor('informativos/alterar/' . $informativos_item['informativo_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>