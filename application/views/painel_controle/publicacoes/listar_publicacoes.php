<?php echo anchor('publicacoes/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>Ano</th>
			<th>Imagem</th>
			<th>Refer&ecirc;ncia</th>
			<th>Autores</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($publicacoes as $publicacoes_item): ?>
		<tr>
			<td><?php echo $publicacoes_item['ano']; ?></td>
			<td><?php echo img('uploads/publicacoes/' . $publicacoes_item['imagem'], FALSE, array('alt' => '', 'height' => '100')); ?></td>
			<td><?php echo $publicacoes_item['referencia']; ?></td>
			<td><?php echo $publicacoes_item['autores']; ?></td>
			<td>
				<?php 
				echo anchor('publicacoes/deletar/' . $publicacoes_item['publicacao_id'], 'Remover'); 
				echo anchor('publicacoes/alterar/' . $publicacoes_item['publicacao_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>