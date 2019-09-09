<?php echo anchor('eventos/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>Data</th>
			<th>Nome</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($eventos as $eventos_item): ?>
		<tr>
			<td><?php echo $eventos_item['data']; ?></td>
			<td><?php echo $eventos_item['nome_evento']; ?></td>
			<td>
				<?php 
				echo anchor('eventos/deletar/' . $eventos_item['evento_id'], 'Remover'); 
				echo anchor('eventos/alterar/' . $eventos_item['evento_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>