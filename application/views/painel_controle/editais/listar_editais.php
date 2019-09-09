<?php echo anchor('editais/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>Data</th>
			<th>T&iacute;tulo</th>
			<th>Arquivo</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($editais as $editais_item): ?>
		<tr>
			<td><?php echo $editais_item['data']; ?></td>
			<td><?php echo $editais_item['titulo']; ?></td>
			<td><?php echo anchor($editais_item['arquivo'], 'Arquivo'); ?></td>
			<td>
				<?php 
				echo anchor('editais/deletar/' . $editais_item['edital_id'], 'Remover'); 
				echo anchor('editais/alterar/' . $editais_item['edital_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>