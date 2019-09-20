<?php echo anchor('pesquisas/adicionar', 'Adicionar novo(a)'); ?>
<table>
	<thead>
		<tr>
			<th>T&iacute;tulo</th>
			<th>Op&ccedil;&otilde;es</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($pesquisas as $pesquisas_item): ?>
		<tr>
			<td><?php echo $pesquisas_item['titulo']; ?></td>
			<td>
				<?php 
				echo anchor('pesquisas/deletar/' . $pesquisas_item['pesquisa_id'], 'Remover'); 
				echo anchor('pesquisas/alterar/' . $pesquisas_item['pesquisa_id'], 'Alterar');
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php echo $links; ?>